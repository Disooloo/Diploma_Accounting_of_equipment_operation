<!-- /.card-header -->
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <input wire:model="term" id="search" type="text" class="form-control form-control-lg">
                    <div class="input-group-append">
                        <button wire:click="btnCloseSearch" type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card-body -->
