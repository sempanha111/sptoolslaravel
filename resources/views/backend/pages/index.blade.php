@extends('backend.layouts.app')
@section('content')
    <div class="flex h-screen bg-slate-100">
        <aside class="fixed inset-y-0 left-0 z-30 w-64 bg-slate-900 text-white transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0">
            <div class="flex items-center justify-center p-6 border-b border-slate-800">
                <a href="#" class="text-2xl font-bold text-white">AdminPanel</a>
            </div>

            <nav class="mt-6">
                <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-tachometer-alt w-5 text-center mr-3"></i> Dashboard
                </a>
                <div>
                    <div class="w-full flex items-center justify-between px-6 py-3 text-slate-300 bg-slate-800">
                        <span class="flex items-center">
                            <i class="fas fa-file-alt w-5 text-center mr-3"></i> Posts
                        </span>
                        <i class="fas fa-chevron-down w-4 h-4"></i>
                    </div>
                    <div class="bg-slate-800/50">
                        <a href="#" class="block pl-14 pr-6 py-2 text-sm text-slate-300 hover:bg-slate-700 hover:text-white">All Posts</a>
                        <a href="#" class="block pl-14 pr-6 py-2 text-sm text-white bg-slate-700">Add New</a>
                    </div>
                </div>
                <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-list w-5 text-center mr-3"></i> Categories
                </a>
                <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-tags w-5 text-center mr-3"></i> Tags
                </a>
                 <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-users w-5 text-center mr-3"></i> Users
                </a>
            </nav>

            <div class="absolute bottom-0 w-full border-t border-slate-800">
                 <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-cog w-5 text-center mr-3"></i> Settings
                </a>
                 <a href="#" class="flex items-center px-6 py-3 text-slate-300 hover:bg-slate-800 hover:text-white transition-colors">
                    <i class="fas fa-sign-out-alt w-5 text-center mr-3"></i> Logout
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col lg:ml-64">
            <header class="flex items-center justify-between p-4 bg-white border-b border-slate-200">
                <button class="lg:hidden text-slate-600">
                    <i class="fas fa-bars w-6 h-6"></i>
                </button>
                <h1 class="text-xl font-bold text-slate-800">Add New Post</h1>
                <div class="flex items-center">
                    <span class="text-sm mr-4 hidden sm:inline">Welcome, Admin</span>
                    <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Admin Avatar" class="w-8 h-8 rounded-full">
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                    <div class="lg:col-span-2 space-y-6">

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <label for="post-title" class="block text-sm font-medium text-slate-700 mb-1">Post Title</label>
                            <input type="text" id="post-title" placeholder="Enter title here" class="w-full border-slate-300 rounded-md shadow-sm text-lg focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <div class="bg-white rounded-lg shadow-md">
                            <div class="p-4 border-b border-slate-200">
                                <label class="block text-sm font-medium text-slate-700 mb-2">Content</label>
                                <div class="flex items-center space-x-2 text-slate-500">
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-bold w-4 h-4"></i></button>
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-italic w-4 h-4"></i></button>
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-underline w-4 h-4"></i></button>
                                    <div class="w-px h-5 bg-slate-200"></div>
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-list-ul w-4 h-4"></i></button>
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-list-ol w-4 h-4"></i></button>
                                    <button type="button" class="p-2 rounded hover:bg-slate-100"><i class="fas fa-link w-4 h-4"></i></button>
                                </div>
                            </div>
                            <div class="p-4">
                                <textarea rows="12" class="w-full border-slate-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Start writing your amazing article..."></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-1 space-y-6">

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium border-b border-slate-200 pb-2 mb-4">Publish</h3>
                            <div class="flex justify-between mt-6">
                                <button type="button" class="text-sm font-medium text-slate-600 hover:text-slate-900">Save Draft</button>
                                <button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700">Publish</button>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium border-b border-slate-200 pb-2 mb-4">Categories</h3>
                            <div class="space-y-2 max-h-48 overflow-y-auto">
                                <div class="flex items-center"><input type="checkbox" class="h-4 w-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500" checked><label class="ml-2 text-sm">Technology</label></div>
                                <div class="flex items-center"><input type="checkbox" class="h-4 w-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500"><label class="ml-2 text-sm">World</label></div>
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium border-b border-slate-200 pb-2 mb-4">Featured Image</h3>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-slate-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-slate-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                                    <div class="flex text-sm text-slate-600"><p class="pl-1">Drag and drop or <button type="button" class="font-medium text-blue-600 hover:text-blue-500">upload a file</button></p></div>
                                    <p class="text-xs text-slate-500">PNG, JPG up to 10MB</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
