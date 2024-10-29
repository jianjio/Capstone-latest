@include('layouts.navigation')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Page</title>
    @vite(['resources/css/comments.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="{{ asset('logo-footer.png') }}" type="image/x-icon">
    <style>
        .reaction-button {
            cursor: pointer;
            margin: 0 5px;
            font-size: 20px;
        }
        .reactions {
            display: none;
            margin-top: 5px;
        }
        .reply-form {
            display: none;
            margin-top: 10px;
        }
        .selected-reactions {
            margin-top: 5px;
        }
    </style>
</head>
<body class="background font-poppins">
    
    <div class="container mx-auto mt-10">
        <h2 class="text-4xl font-bold uppercase text-center mb-4">post a comment</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
<div class="w-full max-w-xs mx-auto">
        <form class="card shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('community.comments.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 text-sm font-medium text-[#D1BDC6]" for="name">Name:</label>
                <input class="shadow-sm bg-slate-800 border border-gray-300 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-[#D1BDC6] block w-full p-2.5 " type="text" name="name" id="name" required>
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-sm font-medium text-[#D1BDC6]" for="comment">Comment:</label>
                <textarea class="block p-2.5 w-full text-sm text-white bg-slate-800 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-[#D1BDC6] " name="comment" id="comment" required></textarea>
            </div>
            <button class="inline-block bg-red-600 text-white px-4 py-2 rounded text-sm hover:bg-red-700 transition duration-300" type="submit">Submit Comment</button>
        </form>
    </div>
<div>
        <h2>Comments:</h2>
        <div class="">
        <ul>
            @foreach($comments as $comment)
                <div class="">
                    <strong>{{ $comment->name }}</strong>: {{ $comment->comment }} ({{ $comment->created_at }})
                    <div>
                        <button class="like-btn" data-comment-id="{{ $comment->id }}">Like</button>
                        <div class="reactions" id="reactions-{{ $comment->id }}">
                            <span class="reaction-button" data-comment-id="{{ $comment->id }}" data-reaction="😀">😀</span>
                            <span class="reaction-button" data-comment-id="{{ $comment->id }}" data-reaction="❤️">❤️</span>
                            <span class="reaction-button" data-comment-id="{{ $comment->id }}" data-reaction="😂">😂</span>
                            <span class="reaction-button" data-comment-id="{{ $comment->id }}" data-reaction="😮">😮</span>
                        </div>
                        <div class="selected-reactions" id="selected-reactions-{{ $comment->id }}"></div>
                        <button class="reply-btn" data-comment-id="{{ $comment->id }}">Reply</button>
                        <div class="reply-form" id="reply-form-{{ $comment->id }}">
                            <textarea name="reply" placeholder="Write a reply..." required></textarea>
                            <button type="button" class="submit-reply-btn" data-comment-id="{{ $comment->id }}">Submit Reply</button>
                            <div class="replies"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
    </div>
    </div>

    <script>
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', () => {
                const commentId = button.getAttribute('data-comment-id');
                const reactions = document.getElementById('reactions-' + commentId);
                reactions.style.display = reactions.style.display === 'block' ? 'none' : 'block';
            });
        });

        document.querySelectorAll('.reply-btn').forEach(button => {
            button.addEventListener('click', () => {
                const commentId = button.getAttribute('data-comment-id');
                const replyForm = document.getElementById('reply-form-' + commentId);
                replyForm.style.display = replyForm.style.display === 'block' ? 'none' : 'block';
            });
        });

        document.querySelectorAll('.submit-reply-btn').forEach(button => {
            button.addEventListener('click', () => {
                const commentId = button.getAttribute('data-comment-id');
                const replyTextArea = document.querySelector(`#reply-form-${commentId} textarea`);
                const replyMessage = replyTextArea.value;

                if (replyMessage) {
                    const repliesContainer = document.querySelector(`#reply-form-${commentId} .replies`);
                    const replyItem = document.createElement('div');
                    replyItem.textContent = `You: ${replyMessage}`;
                    repliesContainer.appendChild(replyItem);
                    replyTextArea.value = ''; // Clear the input
                }
            });
        });

        document.querySelectorAll('.reaction-button').forEach(button => {
            button.addEventListener('click', () => {
                const commentId = button.getAttribute('data-comment-id');
                const reaction = button.getAttribute('data-reaction');
                const selectedReactionsContainer = document.getElementById('selected-reactions-' + commentId);

                // Create a span for the selected reaction
                const reactionSpan = document.createElement('span');
                reactionSpan.textContent = reaction;
                reactionSpan.style.marginRight = '5px';

                // Append the selected reaction
                selectedReactionsContainer.appendChild(reactionSpan);
                
                // Hide the reactions after selection
                const reactions = document.getElementById('reactions-' + commentId);
                reactions.style.display = 'none';

                // Logic to handle reactions (e.g., send AJAX request to server)
                console.log(`Reacted to comment ${commentId} with ${reaction}`);
            });
        });
    </script>
</body>
</html>
@include('profile.partials._footer')