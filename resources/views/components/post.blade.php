@props(['post'])

<div class="mb-4">
                            <a href="{{ route('users.posts', $post->user) }}" class="fs-5 fw-bold">{{ $post->user->name }}</a> 
                            <span class="fw-light fst-italic">{{ $post->created_at->diffForHumans() }}</span>
                            
                            <p class="mb-2">{{ $post->body }}</p>
                           
                            @can('delete', $post)
                                <form action="{{ route('posts.destroy', $post) }}" method="post" class="mb-2">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            @endcan
                           
                            <div class="d-flex justify-contents-between">
                                @auth
                                    @if (! $post->likedBy(auth()->user()))
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mb-2">
                                            @csrf
                                            <button class="btn btn-outline-primary">Like</button>
                                        </form>
                                    @else
                                        <form action="{{ route('posts.likes', $post) }}" method="post" class="mb-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger">Unlike</button>
                                        </form>
                                    @endif
                                        
                                @endauth
                                    <span class="ms-2">{{ $post->likes->count() }} {{ Str::plural('like',
                                                        $post->likes->count()) }}</span>
                            </div>