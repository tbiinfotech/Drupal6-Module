<div class="sign-in-box">
							<div class="drop-inner">
								<div class="drop-content">
									<div class="top-link">
										<span class="txt1">Have an account?</span>
										<a href="<?php echo $base_url?>/user/register">SIGN IN <span>here</span></a>
									</div>
									
										<div>
											<div class="form-item">
												<label for="edit-email" accesskey="E">Email address</label>
												<input id="<?php echo $username_id ?>" title="<?php echo $username_title ?>"type="text" class="form-text required" value="<?php echo $username_value ?>" size="15" name="<?php echo $username_name ?>" maxlength="60"/>
											</div>
											<div class="form-item">
												<label for="edit-pass" accesskey="P">Password:</label>
												<input id="<?php echo $password_id ?>" title="<?php echo $password_title ?>"type="text" class="form-text required" value="<?php echo $password_value ?>" size="15" name="<?php echo $password_name ?>" maxlength="60"/>
											</div>
											<input type="submit" class="form-submit" value="Sign In" id="<?php echo $submit_id ?>" name="<?php echo $submit_name ?>"/>
                                                                                        <input type="hidden" id="<?php echo $hidden_id ?>" name="<?php echo $hidden_name ?>" value="<?php echo $hidden_value ?>" />
                                                                                        <input type="hidden" id="<?php echo $hidden_form_id ?>" name="<?php echo $hidden_form_name ?>" value="<?php echo $hidden_form_value ?>" />
											<div class="item-list">
												<ul>
													<li><a title="Forgotten password?" href="<?php echo $base_url ?>/user/password">Forgotten password?</a></li>
													<li>New user? <a title="Sign up and take part!" href="<?php echo $base_url?>/user/register">Sign up and take part!</a></li>
												</ul>
											</div>
										</div>
									
								</div>
							</div>
						</div>