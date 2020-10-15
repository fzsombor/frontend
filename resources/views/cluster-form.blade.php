<div class="row p-5">
    <div class="col-3"></div>
    <div class="col-6">
        <form method='post' action='add' enctype='multipart/form-data' class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label for="sku" class="col-4 col-form-label">Amazon SKU</label>
                <div class="col-8">
                    <input id="sku" name="sku" placeholder="Meal tray" type="text" class="form-control"
                           aria-describedby="skuHelpBlock" required="required">
                    <span id="skuHelpBlock" class="form-text text-muted">Must match with the amazon one</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="url" class="col-4 col-form-label">Amazon URL</label>
                <div class="col-8">
                    <input id="url" name="url" placeholder="https://www.amazon.com/dp/B07R3BQNWL" type="text"
                           class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="manufacturing" class="col-4 col-form-label">Manufacturing costs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="manufacturing" name="manufacturing" placeholder="5.03" type="text" required="required"
                               class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="shipping" class="col-4 col-form-label">Shipping costs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="shipping" name="shipping" placeholder="1.32" type="text" class="form-control"
                               required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="customs" class="col-4 col-form-label">Customs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="customs" name="customs" placeholder="0.75" type="text" class="form-control"
                               required="required">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inspection" class="col-4 col-form-label">Inspection costs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="inspection" name="inspection" placeholder="1.2" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="local_shipping" class="col-4 col-form-label">Local shipping costs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="local_shipping" name="local_shipping" placeholder="0.36" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="other_costs" class="col-4 col-form-label">Other costs</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="other_costs" name="other_costs" placeholder="0.68" type="text" class="form-control"
                               aria-describedby="other_costsHelpBlock">
                    </div>
                    <span id="other_costsHelpBlock" class="form-text text-muted">Additional warehousing, bank fees etc.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="other_fees" class="col-4 col-form-label">Other fees</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="other_fees" name="other_fees" placeholder="1.03" type="text" class="form-control"
                               aria-describedby="other_feesHelpBlock">
                    </div>
                    <span id="other_feesHelpBlock" class="form-text text-muted">Amazon placement fee, barcode fee etc.</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="other" class="col-4 col-form-label">Other correction</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-dollar"></i>
                            </div>
                        </div>
                        <input id="other" name="other" placeholder="0.24" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="valid_from" class="col-4 col-form-label">Cogs valid from</label>
                <div class="col-8">
                    <input id="valid_from"/>
                    <script>
                        $('#valid_from').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary" style="background-color: #4e555b; border-color: #4e555b">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</div>
<div class="row"></div>
