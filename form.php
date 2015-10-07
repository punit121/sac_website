<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registermentor" style="width:300px;">
						join us
</button>
					
					
					
	<div class="modal fade" id="registermentor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Sign up as a Mentor </h4>
				</div>
				<div class="modal-body">
					<form accept-charset="UTF-8" action="/mentors" method="post"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="M6yvcdpx3ZcBl16iOYSxL6o5txo1qJx8oJrZ/D3159U=" /></div>

<h3 class="center"> Basic Details </h3>
<div class="field">
 <input type="text" style="width:500px;padding:6px;border-radius:5px;" placeholder="Person Name"><br><br>
</div>

<div class="field">
   <input type="text" style="width:500px;padding:6px;border-radius:5px;" placeholder="Company Name"><br><br>
</div>

<div class="field">
  <label for="mentor_password">Password</label>
<br />
  <input autocomplete="off" id="mentor_password" name="mentor[password]" type="password" />
</div>

<div class="field">
  <label for="mentor_password_confirmation">Password confirmation</label><br />
  <input autocomplete="off" autofocus="autofocus" id="mentor_password_confirmation" name="mentor[password_confirmation]" type="password" />
</div>


<div class="field">
  <label for="mentor_passout_year">Passout year</label><br />
  <input id="mentor_passoutyear" name="mentor[passoutyear]" type="text" />
</div>




<hr/>


<br/>
<div class="actions">
  <input class="btn btn-success" name="commit" type="submit" value="Sign up" />
</div>
</form>
				</div>
			</div>
		</div>
	</div>