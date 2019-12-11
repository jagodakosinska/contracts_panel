
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<div class="form-vertical">
                    <?= form_open("login/{$action}") ?>
						<div class="module-head">
							<h3><?= str_replace('_', ' ', ucfirst($action)) ?></h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
                                    <label>Nazwa użytkownika</label>
									<input class="span12" name="username" type="text" id="inputEmail">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
                                <label>Hasło</label>
									<input class="span12" name="password" type="password" id="inputPassword">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<input type="submit" name="<?= $submit ?>" class="btn btn-primary pull-right" value="<?= ucfirst($submit) ?>">
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
                    </form>
					</div>
				</div>