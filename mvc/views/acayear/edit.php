
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><i class="fa fa-signal"></i> <?=$this->lang->line('panel_title')?></h3>

       
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><i class="fa fa-laptop"></i> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("acayear/index")?>"><?=$this->lang->line('menu_acayear')?></a></li>
            <li class="active"><?=$this->lang->line('menu_edit')?> <?=$this->lang->line('menu_acayear')?></li>
        </ol>
    </div><!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-8">
                <form class="form-horizontal" role="form" method="post">

                    <?php 
                        if(form_error('acayear')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="acayear" class="col-sm-2 control-label">
                            <?=$this->lang->line("acayear_name")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="acayear" name="acayear" value="<?=set_value('acayear', $acayear->acayear)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('acayear'); ?>
                        </span>
                    </div>

                   

                   


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_acayear")?>" >
                        </div>
                    </div>

                </form>
            </div>    
        </div>
    </div>
</div>
