<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom-modal.css"/>

<div id="add-asset-type" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modal-title-add-asset-type" class="modal-title">Add Asset Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body-add-asset-type">
                <?php echo form_open(current_url(), array( 'id' => 'add-asset-type-form', 'name' => 'add-asset-type-form')); ?>
                    <div class="form-group">
                        <label>Name<span class="required"> *</span></label>
                        <input id="add-asset-type-name" name="name" class="form-control" value="<?php set_value('name'); ?>">
                        <div id="add-asset-type-name-error" class="invalid-feedback"></div>
                    </div>
                    <div>
                        <div class="modal-body-footer">
                            <button id="modal-cancel-add-asset-type" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="asset-type-add-edit-submit" value="Save" class="btn btn-primary">
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<div id="edit-asset-type" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="modal-title-edit-asset-type" class="modal-title">Edit Asset Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modal-body-edit-asset-type" class="modal-body">
                <?php echo form_open(current_url(), array( 'id' => 'edit-asset-type-form', 'name' => 'edit-asset-type-form')); ?>
                    <div class="form-group">
                        <label>Name<span class="required"> *</span></label>
                        <input id="edit-asset-type-name" name="name" class="form-control" value="<?php set_value('name'); ?>">
                        <div id="edit-asset-type-name-error" class="invalid-feedback"></div>
                    </div>
                    <div>
                        <div class="modal-body-footer">
                            <button id="modal-cancel-edit-asset-type" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <input id="modal-submit-edit-asset-type" type="submit" name="asset-type-edit-edit-submit" value="Save" class="btn btn-primary">
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
