<?php namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use DB;
use Request;
class News extends Model {
    protected $table = 'news';
    protected $fillable = ['id_category','title', 'slug', 'content', 'image_path_full','video_url','features','order','status','lang'];

    public function scopeDtNews($query) {
        $aColumns = array('id','title','status','name');
        $rResult = $query->groupBy('news.id')->leftJoin('category as category', 'category.id', '=', 'news.id_category')
                ->select(DB::raw("SQL_CALC_FOUND_ROWS news.id,news.title,news.status,IFNULL(category.name,'') AS name"));
        /*
         * Paging
         */
        if (Request::has('iDisplayStart') && Request::get('iDisplayLength') != '-1') {
            $rResult = $rResult->skip(Request::get('iDisplayStart'))->take(Request::get('iDisplayLength'));
        }
        
        /*
         * Ordering
         */
        if (Request::has('iSortCol_0')) {
            for ($i = 0; $i <= intval(Request::get('iSortCol_0')); $i++) {
                if (Request::get('bSortable_' . intval(Request::get('iSortCol_' . $i))) == "true") {
                    $rResult = $rResult->orderBy($aColumns[intval(Request::get('iSortCol_' . $i))], (Request::get('sSortDir_' . $i) === 'asc' ? 'asc' : 'desc'));
                }
            }
        }
        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        //$rResult = $rResult->wherelang(getLang());
        
        if (Request::has('sSearch') && Request::get('sSearch') != "") {
            $rResult = $rResult->orWhere(function($query) use ($aColumns) {
                for ($i = 0; $i < count($aColumns); $i++) {
                    if ($aColumns[$i] == 'id') {
                        $aColumns[$i] = 'news.id';
                    }
                    $query->orWhere($aColumns[$i], 'LIKE', '%' . Request::get('sSearch') . '%');
                }
            });
        }
        /* Individual column filtering */
        for ($i = 0; $i < count($aColumns); $i++) {
            if (Request::has('bSearchable_' . $i) && Request::get('bSearchable_' . $i) == "true" && Request::get('sSearch_' . $i) != '') {
                $rResult = $rResult->where($aColumns, 'LIKE', '%' . Request::get('sSearch_' . $i) . '%');
            }
        }
        
        $rResult = $rResult->where('news.lang','=',getLang());
        
        $rResult = $rResult->get();
        $sQuery = DB::select("
		SELECT FOUND_ROWS() as row
	");
        $iFilteredTotal = $sQuery[0]->row;
        $aResultTotal = DB::select("
		SELECT COUNT(`id`) as countid
		FROM   news where lang = '".getLang()."'
	");
        $iTotal = $aResultTotal[0]->countid;
        /*
         * Output
         */
        $output = [
            "sEcho" => intval(Request::get('sEcho')),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => []
        ];
        foreach ($rResult->toArray() as $aRow) {
            $row = [];
            for ($i = 0; $i < count($aColumns); $i++) {
                if ($aColumns[$i] == "version") {
                    /* Special output formatting for 'version' column */
                    $row[] = ($aRow[$aColumns[$i]] == "0") ? '-' : $aRow[$aColumns[$i]];
                } else if ($aColumns[$i] != ' ') {
                    /* General output */
                    $row[$aColumns[$i]] = $aRow[$aColumns[$i]];
                }
            }
            $output['aaData'][] = $row;
        }
        return $output;
    }
}