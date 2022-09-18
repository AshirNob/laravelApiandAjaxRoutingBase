<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Create <span class="fw-300"><i>Shop</i></span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                  
               <form name="fCreateShop" action="#" onsubmit="SubmitFrmCreateShop(document.fCreateShop);return false;">
               
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Shop Name</label>
                            <input type="text" id="sName" name="shopname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="simpleinput">Shop Description</label>
                            <input type="text" id="sDescription" name="shopdescription" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>