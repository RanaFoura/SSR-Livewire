# SSR-Livewire
## Steps:
Installing Laravel 
1. Create new laravel project. ``` composer create-project laravel/laravel SSR-Livewire```
   
Installing Livewire
1. Installing livewire. ``` composer require livewire/livewire ```
2. Create new component. ``` php artisan make:livewire MyComponent ```
3. Update your code as in the files .

## SSR feature (in livewire) 

Livewire is a package for Laravel that allows you to build interactive user interfaces using server-side logic and server-rendered views. This means that instead of building traditional client-side JavaScript components, you define your components on the server-side using PHP and Blade templates.

Server-Side Rendering (SSR) means that the initial rendering of these components happens on the server-side, and the resulting HTML is sent to the client (browser) for display. This is different from traditional client-side rendering (CSR) frameworks like React or Vue.js, where the initial rendering happens in the browser, and JavaScript is responsible for rendering and managing the UI components.

Livewire's SSR approach offers several benefits, including better SEO (Search Engine Optimization) as search engine bots can directly see the rendered HTML content, faster initial page load times since the server is doing the rendering, and potentially better accessibility and compatibility across browsers as the server-generated HTML is more likely to be consistent.

In summary, Livewire's SSR (Server-Side Rendering) allows you to build interactive UI components using server-side logic and sends pre-rendered HTML to the client, offering certain advantages over traditional client-side rendering approaches. Keep in mind that developments may have occurred after my last update, so it's always a good idea to refer to the official documentation or the latest sources for the most up-to-date information.

In SSR Livewire, the process works as follows:

1. Initial Render: When the user loads a page or interacts with a Livewire component, the component is rendered on the server-side, and a fully rendered HTML representation of the component is sent to the client's browser.
2. Client-Side Interactivity: Once the initial render reaches the client's browser, Livewire initializes a JavaScript runtime that takes over the interactivity. When the user interacts with the component (e.g., clicks a button or submits a form), Livewire uses JavaScript to handle the event and sends the relevant data to the server via AJAX requests.
3. Server-Side Updates: The server processes the AJAX request, updates the component's data or performs any necessary actions, and re-renders the component on the server-side. The updated HTML is then sent back to the client, and Livewire replaces the old component's HTML with the new one, updating the user interface without a full page refresh.

## Result
![Result](https://github.com/RanaFoura/SSR-Livewire/assets/115618347/437de576-8621-484f-b957-2c1fefdb68d7)

