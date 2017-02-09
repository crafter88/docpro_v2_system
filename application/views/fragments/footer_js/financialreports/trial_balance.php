<script>
	$(function(){
        $("#output").pivotUI(
            [ 
                {color: "blue", shape: "circle", type: '2D'}, 
                {color: "red", shape: "triangle", type: '3D'}
            ], 
            { 
                rows: ["color", 'type'], 
                cols: ["shape"] 
            }
        );
     });
</script>