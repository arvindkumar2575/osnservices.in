<?php
// var_dump($layout);
?>

<div class="form-wrapper">
    <div class="close">
        <span type="button" class="form-close">
            <i class="fas fa-times-circle blue-color"></i>
        </span>
    </div>
    <div class="add-pages">
        <h3 class="border-bottom"><?= ucwords($action) ?> Page</h3>
        <form id="<?= $action ?>-ae-<?= $formname ?>-form" class="container add-form" method="post" data-action="<?= $action ?>" data-formname="<?= $formname ?>">
            <div class="row form-fields">

                <?php
                $selected_val = '';
                if (isset($id) && !empty($id)) {
                    $selected_val = $id;
                }
                ?>
                <input type="hidden" name="page_id" value="<?= $selected_val ?>" />



                <?php
                // echo '<pre>';print_r($design_layout);

                ?>

                <h4 class="background-ddd"><?=$page_detail['name']?></h4>

                <div class="designs-section">
                    <div class="" style="display: flex;">

                        <div id="status" class="form-control designs-dropdown" name="status" style="width: 250px;">
                            <div class="selected" value="" >--select layout--</div>
                            <div class="options">
                                <?php
                                $options = '';
                                foreach ($layout as $key => $value) {
                                    $options .= '<div class="designs-items" value="'.$value['id'].'"><img height="50" width="auto" src="'.base_url($value['url']).'" /> '.$value['display_name'].'</div>';
                                    echo $options;
                                }
                                ?>
                            </div>
                            <input type="hidden" name="design" />
                        </div>
                        <button class="btn btn-success add-design-btn" type="button">
                            <i class="fas fa-solid fa-plus-square"></i>
                            <i class="fas fa-solid fa-bars"></i>
                        </button>
                    </div>
                </div>

                <?php /*
                $options = '';
                $designs = '';
                foreach ($layout as $key => $value) {
                    $options .= '<option value="'.$value['id'].'">'.$value['display_name'].'</option>';
                    $designs .= '';
                }
                ?>
                
                <div class="select-design">
                    <label for="status">Section Layout</label>
                    <select id="status" class="form-control" name="status">
                        <option value="" >--select layout--</option>
                        <?=$options?>
                    </select>
                </div>

                <div class="accordion" id="design_">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <textarea class="form-control" id="feature1" rows="5">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </textarea>

                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Accordion Item #5
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <textarea class="form-control" id="feature5" rows="5">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </textarea>

                            </div>
                        </div>
                    </div>
                </div>
                <?php */
                ?>










            </div>

            <?php
            $btn_name = $action == 'add' ? $action : 'save';
            ?>
            <input type="hidden" name="action" value="<?= $btn_name ?>" />
            <div class="form-group col-md-12 mt-2">
                <button type="submit" class="me-2 <?= $action ?>-ae-<?= $formname ?>-form btn btn-primary"><?= ucwords($btn_name) . " Design" ?></button>
            </div>
        </form>
    </div>
</div>