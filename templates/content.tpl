

<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            {$pageInfos['title']|ucfirst} <small>{$pageInfos['subtitle']|ucfirst}</small>
                        </h1>
                            {if $addModal} 
                            <div style="padding: 20px 0px 0px 10px;display:inline-block">
                                <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#{$pageInfos['title']}">
                                  <i class="fa fa-plus xs"></i>
                                </button>
                            </div>
                            <form action="dreams.php?add=1" method="post">
                            <div id="{$pageInfos['title']}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">{$addModal['title']}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>{$addModal['content']}</p>
                                            {if {$addModal['warning']}}<p class="text-warning"><small>{$addModal['warning']}</small></p> {/if}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save changes"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            {/if}

<div id="history_back" class="col-xs-12">
<a href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Back</a>
</div>


                        
                    </div>
                </div>
				
				

	   {$content}
				
				
            
                <!-- /. ROW  -->
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->


<!-- Modal confirmation -->
<div id="confirmationModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <input type="submit" id="yesButton" class="btn btn-primary" value="Yes"/>
            </div>
        </div>
    </div>
</div>

