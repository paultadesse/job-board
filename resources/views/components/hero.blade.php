<section>
	<div class="flex items-center justify-center p-7">
		<div class="space-y-7">
			<h1 class="text-center font-bold text-5xl">Top jobs in the industry </h1>
			<p class="flex max-w-3xl text-justify text-gray-600">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.
			</p>
			<form class="flex w-full justify-center items-end" action="{{ route('listings.index') }}" method="get">
				<div class="relative  w-full lg:w-1/2 text-left">
					<input type="text" id="s" name="s" value="{{ request()->get('s') }}" class="">
					<button class="inline-flex bg-indigo-500 py-2 px-6 text-white"> Search</button>
				</div>
			</form>
			<p class="text-sm mt-2 text-gray-500 mb-8 w-full">
				laravel, php, vue, node and react
			</p>
		</div>
	</div>
</section>