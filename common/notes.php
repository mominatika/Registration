  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center text-center">
        
        <div class="col-lg-10 align-self-end">
          <h1 class=" text-white font-weight-bold" >My Saved Notes</h1>
          <hr class="divider my-4 text-white" style="
    border-color: #fff;
"><br/>
        </div>
        
        <div class="my_notes col-md-12">
                
                <div class="row">
                    <div class="col-xs-6 col-sm-3 folders">
                        <ul class="folder-list" id="folderList">
                            

<li id="folder_ALL" class="active"><a href=" javascript:fnOpenFolder('ALL');">All Notes</a></li>
<li id="folder_DEFAULT" class="droppable  ui-droppable" title="Default Folder"><a href="javascript:fnOpenFolder('DEFAULT');">Inbox</a></li>

                        </ul>
                        <ul class="folder-option" id="folderOption">
                            <li><a href="Javascript:fnManageFolders();">Manage Folders</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-6  col-sm-9">
                        <div class="topLinks text-left">
                            <strong>
                                <a href="javascript:fnSortByTitle();" role="button" title="Sorted Alphabetically">Sort by Title</a> |
                                <a href="javascript:fnSortByUpdated();" role="button" title="Most Recent First">Sort by Updated</a>
                            </strong>
                        </div><hr/>
                            <div class="text-white">No any note exist.</div>
                    </div>
                </div>

            </div>
            
      </div>
    </div>
  </section>