<div class="mail-wrapper" style="margin: 0 auto;background: #E5E5E5;">
	<table style="width: 600px; margin: 0 auto;border-collapse: collapse; background: #ffffff;">
		<thead>
			<tr>
				<td style="text-align: center;font-size: 38px;font-weight: 400;padding: 5px 10px 20px;background: #84C639;color: #ffffff;">Contact Us</td>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td style="padding: 15px; text-align: center;background-color:rgb(255 255 255);">
			<img src="{{ url('/') }}/frontend/assets/img/crackers-logo.png" alt="Ganesh Ka Traders" style="max-width: 255px;height: 80px;"></td>
		</tr>
		<tr>
			<td style="text-align: center;font-size: 16px;font-weight: 500;padding:10px;background: #84C639;color: #ffffff;">Thank you for Contact Us!</td>
		</tr>
		<tr>
			<td style="text-align: center;padding:10px 0px;font-size: 18px;font-weight: 500;color: #191919;">Hi @if(!empty($first_name)){{$first_name}}@endif,</td>
		</tr>
		<tr>
			<td>
				<p style="color: #595959;font-size: 16px;font-weight: 400;text-align: center;padding: 0 50px;margin-bottom:5px;">Your contact us details are shown below for your reference</p>
			</td>
		</tr>
		<tr>
			<td style="padding:10px 40px;">
				<span style="display: block;height: 3px;background: #F1F1F1;"></span>
			</td>
		</tr>
		<tr>
			<td style="padding: 0 61px;" align="center"> 
			
			 <table style="width:100%;line-height:32px;" border="0" class="user-view-table">
				<tr>
					<td colspan="2" align="center" class="fw-bolder bg-gray p10">
					<b style="color: #84C639">Contact Information</b></td>
				</tr>
				  <tr>
					<th width="90px;" align="left">First Name:</th>
					<td>@if(!empty($first_name)){{ $first_name }}@endif</td>
				  </tr>
				  <tr>
					<th width="90px;" align="left">Last Name:</th>
					<td>@if(!empty($last_name)){{ $last_name }}@endif</td>
				  </tr>
				  <tr>
					<th width="90px;" align="left">Email Id:</th>
					<td>@if(!empty($email)){{ $email }}@endif</td>
				  </tr>
				  <tr>
					<th align="left">Phone No:</th>
					<td>@if(!empty($phone)){{$phone}}@endif</td>
				  </tr>
				  <tr>
					<th align="left">City:</th>
					<td>@if(!empty($city)){{$city}}@endif</td>
				  </tr>
				  <tr>
					<th align="left">State:</th>
					<td>@if(!empty($statename)){{$statename}}@endif</td>
				  </tr>
				  <tr>
					<th align="left">Message:</th>
					<td>@if(!empty($message)){{$message}}@endif</td>
				  </tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="padding: 20px 40px;">
				<span style="display: block;height: 3px;background: #F1F1F1;"></span>
			</td>
		</tr>
			<tr>
				<td style="padding:0px 0;text-align:center;background: #F1F1F1;">
					<table style="width: 100%;">
						<tbody>
						<tr>
							<td style="padding: 20px 40px;text-align: center!important;">
								<p style="color: #595959;font-size: 14px;font-weight: 400;max-width: 70%;margin: 0 auto;text-align: center!important">© {{ date('Y') }} All rights reserved by <a data-cke-saved-href="{{ url('/') }}" href="{{ url('/') }}" target="_blank" style="color: rgb(128, 128, 128);">Ganesh Ka Traders</a></p>
							</td>
						</tr>
					</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</div>