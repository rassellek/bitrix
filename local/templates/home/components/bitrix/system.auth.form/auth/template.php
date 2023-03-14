<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

CJSCore::Init();
?>

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<? if ($arResult["FORM_TYPE"] == "login"): ?>

	<div class="container">
		<form name="system_auth_form<?= $arResult["RND"] ?>" method="post" target="_top"
			action="<?= $arResult["AUTH_URL"] ?> " class="p-5 bg-white border">

			<? if ($arResult["BACKURL"] <> ''): ?>
				<input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
			<? endif ?>
			<? foreach ($arResult["POST"] as $key => $value): ?>
				<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
			<? endforeach ?>
			<input type="hidden" name="AUTH_FORM" value="Y" />
			<input type="hidden" name="TYPE" value="AUTH" />

			<table width="95%">

				<tr>
					<td colspan="2">
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="USER_LOGIN">
									<?= GetMessage("AUTH_LOGIN") ?>:<br />
								</label>
								<input type="text" class="form-control" placeholder="<?= GetMessage("AUTH_LOGIN") ?>"
									name="USER_LOGIN" value="" maxlength="50" size="17">
								<script>
									BX.ready(function () {
										var loginCookie = BX.getCookie("<?= CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"]) ?>");
										if (loginCookie) {
											var form = document.forms["system_auth_form<?= $arResult["RND"] ?>"];
											var loginInput = form.elements["USER_LOGIN"];
											loginInput.value = loginCookie;
										}
									});
								</script>
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold" for="USER_PASSWORD">
									<?= GetMessage("AUTH_PASSWORD") ?>:<br />
								</label>
								<input type="password" class="form-control" placeholder="<?= GetMessage("AUTH_PASSWORD") ?>"
									name="USER_PASSWORD" value="" maxlength="255" size="17" autocomplete="off" />
								<? if ($arResult["SECURE_AUTH"]): ?>
									<span class="bx-auth-secure" id="bx_auth_secure<?= $arResult["RND"] ?>"
										title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>" style="display:none">
										<div class="bx-auth-secure-icon"></div>
									</span>
									<noscript>
										<span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
											<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
										</span>
									</noscript>
									<script type="text/javascript">
										document.getElementById('bx_auth_secure<?= $arResult["RND"] ?>').style.display = 'inline-block';
									</script>
								<? endif ?>
							</div>
						</div>
					</td>
				</tr>

				<? if ($arResult["STORE_PASSWORD"] == "Y"): ?>
					<tr>
						<td valign="top">
							<input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
						</td>
						<td width="100%">
							<label for="USER_REMEMBER_frm" title="<?= GetMessage("AUTH_REMEMBER_ME") ?>"><? echo GetMessage("AUTH_REMEMBER_SHORT") ?></label>
						</td>
					</tr>
				<? endif ?>

				<? if ($arResult["CAPTCHA_CODE"]): ?>
					<tr>
						<td colspan="2">
							<div class="row form-group">
								<div class="col-md-12">
									<? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:<br />
									<input type="hidden" name="captcha_sid" value="<? echo $arResult["CAPTCHA_CODE"] ?>" />
									<img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>"
										width="180" height="40" alt="CAPTCHA" /><br /><br />
									<input type="text" name="captcha_word" maxlength="50" value="" />
								</div>
							</div>
						</td>
					</tr>
				<? endif ?>

				<tr>
					<td colspan="2">
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" name="Login" value="<?= GetMessage("AUTH_LOGIN_BUTTON") ?>"
									class="btn btn-primary  py-2 px-4 rounded-0">
							</div>
						</div>
					</td>
				</tr>

				<? if ($arResult["NEW_USER_REGISTRATION"] == "Y"): ?>
					<tr>
						<td colspan="2">
							<noindex><a href="<?= $arResult["AUTH_REGISTER_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a></noindex><br />
						</td>
					</tr>
				<? endif ?>

				<!-- 	<tr>
					<td colspan="2">
						<noindex><a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>" rel="nofollow"><?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a></noindex>
					</td>
				</tr> -->
			</table>

		</form>
		<p>
			<a href="<?= SITE_DIR ?>">Вернуться на главную страницу</a>
		</p>
	</div>

	<?
elseif ($arResult["FORM_TYPE"] == "otp"):
	?>

	<form name="system_auth_form<?= $arResult["RND"] ?>" method="post" target="_top" action="<?= $arResult["AUTH_URL"] ?>">
		<? if ($arResult["BACKURL"] <> ''): ?>
			<input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>" />
		<? endif ?>
		<input type="hidden" name="AUTH_FORM" value="Y" />
		<input type="hidden" name="TYPE" value="OTP" />
		<table width="95%">
			<tr>
				<td colspan="2">
					<? echo GetMessage("auth_form_comp_otp") ?><br />
					<input type="text" name="USER_OTP" maxlength="50" value="" size="17" autocomplete="off" />
				</td>
			</tr>
			<? if ($arResult["CAPTCHA_CODE"]): ?>
				<tr>
					<td colspan="2">
						<? echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:<br />
						<input type="hidden" name="captcha_sid" value="<? echo $arResult["CAPTCHA_CODE"] ?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<? echo $arResult["CAPTCHA_CODE"] ?>" width="180"
							height="40" alt="CAPTCHA" /><br /><br />
						<input type="text" name="captcha_word" maxlength="50" value="" />
					</td>
				</tr>
			<? endif ?>
			<? if ($arResult["REMEMBER_OTP"] == "Y"): ?>
				<tr>
					<td valign="top"><input type="checkbox" id="OTP_REMEMBER_frm" name="OTP_REMEMBER" value="Y" /></td>
					<td width="100%"><label for="OTP_REMEMBER_frm"
							title="<? echo GetMessage("auth_form_comp_otp_remember_title") ?>"><? echo GetMessage("auth_form_comp_otp_remember") ?></label></td>
				</tr>
			<? endif ?>
			<tr>
				<td colspan="2"><input type="submit" name="Login" value="<?= GetMessage("AUTH_LOGIN_BUTTON") ?>" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<noindex><a href="<?= $arResult["AUTH_LOGIN_URL"] ?>" rel="nofollow"><? echo GetMessage("auth_form_comp_auth") ?></a></noindex><br />
				</td>
			</tr>
		</table>
	</form>

	<?
else:
	?>

	<div class="container">
		<form action="<?= $arResult["AUTH_URL"] ?>" class="p-5 bg-white border">
			<table width="95%">
				<tr>
					<td align="center">
						<div class="row form-group">
							<div class="col-md-12">
								<?= $arResult["USER_NAME"] ?><br />
								[
								<?= $arResult["USER_LOGIN"] ?>]<br />

								<!-- <a href="<?= $arResult["PROFILE_URL"] ?>" title="<?= GetMessage("AUTH_PROFILE") ?>"><?= GetMessage("AUTH_PROFILE") ?></a><br /> -->
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td align="center">
						<div class="row form-group">
							<div class="col-md-12">
								<p>Вы зарегистрировались и успешно авторизовались.</p>

								<p><a href="<?= SITE_DIR ?>">Вернуться на главную страницу</a></p>
							</div>
						</div>
					</td>
				</tr>
				<tr>
					<td align="center">
						<? foreach ($arResult["GET"] as $key => $value): ?>
							<input type="hidden" name="<?= $key ?>" value="<?= $value ?>" />
						<? endforeach ?>
						<?= bitrix_sessid_post() ?>
						<input type="hidden" name="logout" value="yes" />
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" name="logout_butt" value="<?= GetMessage("AUTH_LOGOUT_BUTTON") ?>"
									class="btn btn-primary  py-2 px-4 rounded-0">
							</div>
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>

<? endif ?>