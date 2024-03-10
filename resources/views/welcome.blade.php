<x-guest-layout>
    @section('title', 'Welcome')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-body">
                        {!! $readmeContent !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>
