<x-app-layout>
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">
            <form action="{{ route('review.store') }}" method="POST">
                @csrf <!-- Add the CSRF token field -->

                <label>Score</label><br>
                <input type="number" name="score" id="score" class="form-control"><br>

                <label>Review</label><br>
                <textarea name="review" id="review" class="form-control"></textarea><br>

                <button type="submit" class="btn btn-success">Save</button><br>
            </form>
        </div>
    </div>
</x-app-layout>
