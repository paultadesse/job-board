<header>
	<div class="flex items-center justify-around pt-2 bg-gray-100 py-4">
		<div>
			<a href="{{ route('listings.index') }}" class="flex">
			<span class="ml-3 text-xl">Laravel Job Board</span>
		</a>
		</div>
		<div class="flex items-center space-x-2 ">
			<nav >
				<a href="{{ route('login') }}">Employers</a>
			</nav>

			<div class="bg-indigo-500 px-2 py-2 text-white rounded">
				<a href="#">post job</a>
			</div>
		</div>
	</div>
</header>