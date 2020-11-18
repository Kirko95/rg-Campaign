"use strict";

(function() {
    $('.btn-add-inventory').on('click', function () {
        i++
        $('#inventory').append(`
            <div class="row`+ i +`">
                <div class="col-md-4">
                    <label for="end">Product Name</label>
                    <input type="text" name="product[]" class="form-control" placeholder="Product name" id="product">
                </div>
                <div class="col-md-4">
                    <label for="end">Type</label>
                    <select name="inventory_type[]" class="form-control" id="inventory_type">
                        <option value="stock">Stock</option>
                        <option value="merchandise">Merchandise</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="end">SKU</label>
                    <input type="text" name="sku[]" class="form-control" placeholder="SKU quantity" id="sku">
                </div>
                <div class="col-md-1">
                    <button type="button" id="`+ i +`" class="btn btn-remove btn-sm btn-danger float-right"><i class="prefix-icon anticon anticon-delete"></i></button>
                </div>
            </div>
        `);
    });
});