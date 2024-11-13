<x-app-layout>
<section class="conti">
    <h2 class="mb-4">Contact Form Submissions</h2>

    @if ($contacts->count())
        <form action="{{ route('contacts.deleteAll') }}" method="POST" id="deleteAllForm">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3" onclick="return confirm('Are you sure you want to delete all contacts?')">
                Delete All Contacts
            </button>
        </form>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->location }}</td>
                        <td>{{ Str::limit($contact->message, 50) }}</td>
                        <td>
                            <!-- Reply Button -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#replyModal-{{ $contact->id }}">
                                Reply
                            </button>

                            <!-- Delete Button -->
                            <form action="{{ route('contacts.delete', $contact->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">
                                    Delete
                                </button>
                            </form>

                            <!-- Reply Modal -->
                            <div class="modal fade" id="replyModal-{{ $contact->id }}" tabindex="-1" aria-labelledby="replyModalLabel-{{ $contact->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="replyModalLabel-{{ $contact->id }}">Reply to {{ $contact->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('contact.reply.submit', $contact->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="reply_message_{{ $contact->id }}" class="form-label">Your Message</label>
                                                    <textarea id="reply_message_{{ $contact->id }}" name="reply_message" class="form-control" rows="5" required placeholder="Write your message here..."></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="credit_{{ $contact->id }}" class="form-label">Your Name</label>
                                                    <input type="text" id="credit_{{ $contact->id }}" name="credit" class="form-control" required placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Send Reply</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        <div class="mt-3">
            {{ $contacts->links() }}
        </div>
    @else
        <div class="alert alert-warning">No contacts found.</div>
    @endif
</section>


<style>
.conti{

    max-width:80%;
    padding:100px;
    margin: 0 auto;
}




</style>




</x-app-layout>
