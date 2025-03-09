@extends('layouts.master')

@section('content')



<div class="container">

	<div class="row">
	<div class="col-md-4 col-md-offset-4">

	
	<div class="my-account style-1 margin-top-5 margin-bottom-40">
 <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Forget Password</a></li>

		</ul>
 
		<div class="tabs-container alt">
          

			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">
				     <form method="POST" class="register" action="{{ route('userForgetpassword') }}">
                        @csrf
					
					
				<p class="form-row form-row-wide">
					<label for="email2">Email Address:
						<i class="im im-icon-Mail"></i>
                        <input type="email" required  class="input-text @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}"  />
					</label>
				</p>


				<p class="form-row">
					<input type="submit" class="button border fw margin-top-10" name="register" value="Submit" />
				</p>

				</form>
			</div>
			<p class="lost_password">
						  <a href="{{ route('login') }}"><strong>Return to login</strong></a>
					</p>

			<!-- Register -->
			

		</div>
	</div>



	</div>
	</div>

</div>

 

@endsection
