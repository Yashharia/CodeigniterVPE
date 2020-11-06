<a id='mkdf-back-to-top' href='#'>
    <span class="mkdf-icon-stack">
        <i class="mkdf-icon-font-awesome fa fa-angle-up "></i> </span>
</a>
<div class="mkdf-team-modal-holder"></div>
<div class="mkdf-content">
    <div class="mkdf-content-inner">
        <div class="mkdf-title-holder mkdf-breadcrumbs-type mkdf-title-predefined-size" style="height: 130px;background-color: #f7f7f7" data-height="130">
            <div class="mkdf-title-wrapper" style="height: 130px">
                <div class="mkdf-title-inner">
                    <div class="mkdf-grid">
                        <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">Add Exhibitor</span></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="wpb_wrapper">
            <h1 style="color: #24678d;line-height: 42px;text-align: center" class="">Add Exhibitor</h1>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/AssociationController/newassociation">
        <div>
            Associations Name
            <input type="text" name="name" id="" class="form-control">
        </div>

        <div>
            <select name="category" id="">
                <option value="associate">Associate</option>
                <option value="vpe-associates">VPE Associates</option>
            </select>
        </div>

        <div>
            Website Buttons
        </div>
        <div id="myRepeatingFields-2">
            <div class="entry input-group col-xs-3">
                <input class="form-control" name="button_name[]" type="text" placeholder="Button Name" />
                <input class="form-control" name="button_link[]" type="text" placeholder="Button Link" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add-2">
                        Add
                    </button>
                </span>
            </div>
        </div>

        <div>
            Associations Partner
        </div>
        <div id="myRepeatingFields">
            <div class="entry input-group col-xs-3">
                <input class="form-control" type="text" name="speakerName[]" multiple="multiple" placeholder="Name" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add">
                        Add
                    </button>
                </span>
            </div>
        </div>

        <div class="col">
            <input class="form-control btn-info " type="submit">
        </div>

    </form>
</div>