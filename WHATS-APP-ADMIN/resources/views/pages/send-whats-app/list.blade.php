<x-default-layout>

    @section('title')
        
    @endsection

    @section('breadcrumbs')
        {{-- {{ Breadcrumbs::render('brands.index') }} --}}
    @endsection

  

    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#manual">Send WhatsApp Manually</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#from_excel">Send WhatsApp From Excel</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h4 class="card-title">WhatsApp instance</h4>
                <input type="text" class="form-control mb-3" placeholder="Instance Name">
                <h4 class="card-title">Numbers:</h4>
                <input type="text" class="form-control mb-3" placeholder="Enter numbers separated by commas">
                <h4 class="card-title">Message:</h4>
                <textarea class="form-control mb-3" rows="4" placeholder="Type your message here"></textarea>
                <div class="mb-3">
                    <button class="btn btn-primary">Add Numbers</button>
                    <button class="btn btn-secondary">Attach</button>
                </div>
                <div class="mb-3">
                    <label>Sending Options</label>
                    <input type="date" class="form-control">
                </div>
                <button class="btn btn-success">Send</button>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Notes</h5>
                <ul>
                    <li>You can send a long text within the message</li>
                    <li>You can include links, images, videos, or any type of text file within the message</li>
                    <li>The maximum daily send is 6000 messages</li>
                    <li>You should avoid sending spam messages because they will block your number by WhatsApp</li>
                    <li>Sending threatening messages and offensive phrases to religions and individuals Your balance will be deleted without retraction or refund</li>
                    <li>Messages are automatically deleted from the archive every three months</li>
                </ul>
            </div>
        </div>
    </div>
    



</x-default-layout>
