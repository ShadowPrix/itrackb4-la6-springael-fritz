# ITRACKB4 LA3 - Movies

Prepared by: Fritz C. Springael

## Q1: Route order
Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

[Answer - If you put {id} or hit it first in laravel and put /movies/featured for example and the rest that dont use id it will be different value in method because starting to {id} laravel read it as an id, so for safety you should put something like create etc to the top first and bottom the {id}.]


## Q2: Handling invalid ids
What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

[Answer - When someone visits a page with an id that doesn't exist, the show() method checks with !isset() whether that id exists in the movie data. If it doesn't, abort(404) is triggered, which shows Laravel's clean 404 page instead of a PHP error.]

## Q3: Why route names
Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

[Answer - I used route names instead of typed URLs because they don't break if the actual URL ever changes. To test this, I renamed my product list route from /product to /store while keeping the route name products.index the same. My link still worked without any changes, since it looked up the route by name instead of using a hardcoded path.]
