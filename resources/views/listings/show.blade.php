<x-app-layout>
	<section class="text-gray-600 overflow-hidden">
		<div class="container px-5 py-24 mx-auto">
			<div class="mb-12">
				<h2 class="text-2xl font-medium text-gray-900">
					{{ $listing->title }}
				</h2>
				<div class="md:flex-grow mr-8 mt-2 flex items-center justify-start space-x-3">
					@foreach($listing->tags as $tag)
						<span class="py-1.5 px-1.5 border border-indigo uppercase"> {{ $tag->name }} </span>
					@endforeach
				</div>
			</div>
			<div class="-my-6">
				<div class="flex flex-wrap md:flex-nowrap">
					<div class="content w-full md:w-3/4 pr-4 leading-relaxed text-base">
						{!! $listing->content !!}
					</div>
					<div class="w-full md:w-1/4 pl-4">
						<img src="/storage/{{ $listing->logo }}" alt="{{ $listing->company }} logo" class="max-w-full mb-4">
						<p class="leading-relaxed text-base">
							<strong>Location: </strong>{{ $listing->location }}<br>
							<strong>Company: </strong>{{ $listing->company }}<br>
						</p>
						<a href="{{ route('listings.apply', $listing->slug) }}" class="block bg-indigo-600 px-6 py-2 text-white uppercase text-center">Apply now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-app-layout>