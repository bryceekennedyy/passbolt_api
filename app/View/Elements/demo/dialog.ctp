<?php
/**
 * Demo Dialog
 *
 * @copyright		 copyright 2013 passbolt.com
 * @license			 http://www.passbolt.com/license
 * @package			 app.View.Elements.demo.dialog
 * @since				 version 2.13.09
 */
?>
<div class="dialog-wrapper">
<div class="dialog">
	<div class="dialog-header">
		<h2>Edit Password</h2>
		<a href="close" class="dialog-close"><i class="icon close no-text"></i><span>close</span></a>
	</div>
	<div class="dialog-tabs">
		<ul class="tabs">
			<li><a href="#" class="selected" data-item-selected="b2164540-ea43-11e2-ac0e-0002a5d5c51b">edit</a></li>
			<li><a href="#">share</a></li>
			<li><a href="#">organize</a></li>
		</ul>
		<ul class="dialog-tabs-content">
			<!-- edit -->
			<li class="dialog-tab-content selected" id="b2164540-ea43-11e2-ac0e-0002a5d5c51c">
				<form>
				<div class="form-content">
					<div class="input text required error">
						<label for="ResourceTitle">Title</label>
						<input name="data[Resource][title]" class="required" maxlength="50" type="text" id="ResourceTitle" placeholder="title"/>
						<div class="message error">the title is required</div>					
					</div>
					<div class="input text">
						<label for="ResourceUrl">URL</label>
						<input name="data[Resource][url]" maxlength="50" type="text" id="ResourceUrl" placeholder="https://example.com/login"/>
					</div>
					<div class="input text required">
						<label for="ResourceUsername">Username</label>
						<input name="data[Resource][username]" class="required" maxlength="50" type="text" id="ResourceUsername" placeholder="username"/>
					</div>
					<div class="input-password-wrapper">
						<div class="input password required short">
							<label for="SecretData">Password</label>
							<input name="data[Secret][data]" class="required" maxlength="50" type="password" id="SecretData" placeholder="username"/>
						</div>
						<div class="actions inline">
							<a href="#" class="button toggle">
								<i class="icon eye big no-text"></i>
								<span>view</span>
							</a>
							<a href="#" class="button">
								<i class="icon key big no-text"></i>
								<span>generate</span>
							</a>
						</div>
						<div class="password-complexity good">
							<span class="progress"><span class="progress-bar"></span></span>
							<span class="complexity-text">complexity: <strong>good</strong></span>
						</div>
					</div>
					<div class="input-datetime-wrapper">
						<div class="input text datetime short">
							<label for="ResourceExpire">Expiracy date</label>
							<input name="data[Resource][expire]" class="required" type="text" id="ResourceExpire" data-format="YYYY-MM-DD HH:mm" data-template="D MMM YYYY HH:mm" placeholder="DD/MM/YYYY HH:MM">
							<div class="actions inline dropdown">
								<a href="#" class="button">
									<i class="clock icon big no-text"></i>
									<span>pick a date and time</span>
								</a>
								<ul class="dropdown-content">
									<li><a href="#">copy login to clipboard</a></li>
									<li><a href="#">copy password to clipboard</a></li>
									<li><a href="#">organize</a></li>
									<li><a href="#">review logs</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="input textarea required">
						<label for="ResourceDescription">Description</label>
						<textarea name="data[Resource][description]" class="required" maxlength="150" id="ResourceDescription" placeholder="add a description"></textarea>
					</div>
				</div>
				<div class="submit-wrapper clearfix">
					<input type="submit" class="button" value="save"/>
					<a href="#" class="cancel button">cancel</a>
				</div>
				</form>
			</li>
		</ul>
	</div>
</div>
</div>