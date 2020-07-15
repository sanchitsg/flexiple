<div id="edit-header-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Header Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="POST" action="/base-layout" enctype="multipart/form-data" id="update-header-form">
                            @csrf
                            <input type="hidden" name="form-type" value="edit-header">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p id="header-form-intro-text">You can only change the following details in the layout!</p>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="brand-name">Enter Brand Name</label>
                                        <input type="text" class="form-control" id="brand-name" name="brand-name">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="header-brand-image" name="header-brand-image">
                                        <label class="custom-file-label" for="header-brand-image">Choose Brand Image File</label>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="menu-number">Enter Number of Header Menus</label>
                                        <input type="text" class="form-control" id="menu-number" name="menu-number">
                                        <small class="error" id="menu-num-error" style="color:#ff0000; font-size:12px; display:none;">Invalid Input! Enter a number between 1 to 4.</small>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row menu-name-row hide"></div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="background-color">Select Header Background Color</label>
                                        <input type="color" class="form-control" id="background-color" name="background-color">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="brand-name-color">Select Header Brand Name Color</label>
                                        <input type="color" class="form-control" id="brand-name-color" name="brand-name-color">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="other-font-color">Select Header Other Font Color</label>
                                        <input type="color" class="form-control" id="other-font-color" name="other-font-color">
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success" id="update-header-layout">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="edit-main-content-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Main Page Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                    <form method="POST" action="/base-layout" enctype="multipart/form-data" id="update-content-form">
                            @csrf
                            <input type="hidden" name="form-type" value="edit-content">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p id="header-form-intro-text">You can only change the following details in the layout!</p>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="content-image" name="content-image">
                                        <label class="custom-file-label" for="content-image">Choose Content Image File</label>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="input-number">Enter Number of Inputs</label>
                                        <input type="text" class="form-control" id="input-number" name="input-number">
                                        <small class="error" id="input-number-error" style="color:#ff0000; font-size:12px; display:none;">Invalid Input! Enter a number between 1 to 4.</small>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="row input-name-row hide"></div>
                            <br/>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-success" id="update-content-layout">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>