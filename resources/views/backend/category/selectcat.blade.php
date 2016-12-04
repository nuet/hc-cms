<link href="{{asset('backend/plugins/bootstrap-treeview-master/dist/bootstrap-treeview.min.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('backend/plugins/bootstrap-treeview-master/dist/bootstrap-treeview.min.js')}}" type="text/javascript"></script>
<div id="treeview1" class=""></div>
<script type="text/javascript">
    $(function() {
        var category = '{{$category}}';
        category = category.replace(/&quot;/ig,'"');
        $tree = $('#treeview1').treeview({
            data: category,
            showCheckbox: true,
            multiSelect: true,
        }).on('nodeChecked ', function(ev, node) {
            for(var i in node.nodes) {
                var child = node.nodes[i];
                $(this).treeview(true).checkNode(child.nodeId);
            }
        }).on('nodeUnchecked ', function(ev, node) {
            for(var i in node.nodes) {
                var child = node.nodes[i];
                $(this).treeview(true).uncheckNode(child.nodeId);
            }
        });
    })
</script>