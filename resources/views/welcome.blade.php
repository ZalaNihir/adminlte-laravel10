<x-guest-layout>
    @section('title', 'Welcome')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content p-0">
                            {!! $terms !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-guest-layout>
