<div class="span9">
    <div class="content">
        <div class="container">
            <h1>Zapisane Umowy</h1>

            <div class="btn-box-row row-fluid">
                <?= form_open('contract/show_contracts') ?>
                <select id='select_month' class="select_month">
                    <?php for ($i = 1; $i <= count($params['months']); $i++) {
                        $selected = ($i == $month) ? "selected='selected'" : ''; ?>
                        <option value="<?= $i ?>" <?= $selected ?>> <?= $params['months'][$i] ?> </option>
                    <?php } ?>
                </select>
                </form>
            </div>
        </div>

        <div class="btn-controls">
            <div class="btn-box-row row-fluid" id="dupa">
                <?php
                $this->load->view('contract/contract_list', array('contract' => $contract));
                ?>
                
            </div>

        </div>
        <!--/#btn-controls-->
    </div>
    <!--/.content-->
</div>
<!--/.span9-->