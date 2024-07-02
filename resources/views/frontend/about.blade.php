@extends('frontend.layout')
@section('css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@endsection
@section('script')
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/template.js"></script>
@endsection
@section('content')

<main id="main">

	<div class="container">

		<div class="row topspace">
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<ul class="nav text-right nav-side">
					<li class="active"><a href="#ui">UI design</a></li>
					<li><a href="#frontend">Frontend development</a></li>
					<li><a href="#backend">Backend development</a></li>
					<li><a href="#projects">Side projects</a></li>
				</ul>

			</aside>
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
				<p><img src="assets/images/mac.jpg" alt="" class="" width="100%" ></p>
				<h3>Necessitatibus</h3>
				<p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
				<h3>Fugit, laboriosam</h3>
				<p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
			</article>
			<!-- /Article -->
			

		</div>
	</div>	<!-- /container -->
	
</main>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
@endsection
