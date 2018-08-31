<style>
.tabTag > a{
	color:#808080;
	}
	
.modalAdjust{
	width:700px;
	}

@media(max-width:700px){

.modalAdjust{
	width:300px !important;
	}
	
.tabTag {
	width:100px;
	}
	
}

</style>
  <div class="modal-dialog modalAdjust" style="width:700px;">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:0px;">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              
<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li class="tabTag" role="presentation"><a  href="#materialsTab" aria-controls="materialsTab" role="tab" data-toggle="tab">Materials Customize</a></li>
  
  <li  class="tabTag" role="presentation"><a href="#projectcatTab" aria-controls="profile" role="tab" data-toggle="tab">Project Category
</a></li>
  <li class="tabTag" role="presentation"><a href="#projectbalTab" aria-controls="messages" role="tab" data-toggle="tab">Project Balance</a></li>
  
  <li class="tabTag" role="presentation"><a href="#projectgalTab" aria-controls="settings" role="tab" data-toggle="tab">Project Gallery</a></li>
</ul>
      </div>
      <div class="modal-body">


<div class="tab-content">
  <div role="tabpanel" class="tab-pane" id="materialsTab"><?php include 'Materials.php'; ?></div>
  <div role="tabpanel" class="tab-pane" id="projectcatTab"><?php include 'ProjectCategory.php'; ?></div>
  <div role="tabpanel" class="tab-pane" id="projectbalTab"><?php include 'ProjectBalance.php'; ?></div>
  <div role="tabpanel" class="tab-pane" id="projectgalTab"><?php include 'ProjectGallery.php'; ?></div>
</div>

</div>
      <div class="modal-footer">
    
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
