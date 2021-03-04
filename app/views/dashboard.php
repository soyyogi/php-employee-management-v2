<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<script>
    const employees = <?php echo json_encode($data);?>;
</script>
<script defer type="module" src="./assets/js/js-grid/js-grid.js"></script>

<?php
echo '<div id="grid" class="grid"></div>';