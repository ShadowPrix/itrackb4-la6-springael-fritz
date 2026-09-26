# ITRACKB4 LA6 - Movies

Prepared by: Fritz C. Springael

## Q1:
You added a second filter without adding a single route. Explain why no new route was needed. Your answer should say something about what the router actually looks at.

[Answer - No new route was needed, the router matches on the path only; it never looks past ?, so adding a second query-string value doesn't touch the route table at all.]


## Q2:
Suppose you had built both filters as route parameters instead. Describe what the URL for 'year 4 only, no course filter' would have to look like, and why.

[Answer - with route parameters you'd need something like /movies/filter/_/2020 or a second optional segment, an ugly placeholder for the "skipped" filter, versus just omitting year from the query string.]

## Q3:
Your navigation link stays marked on a detail page and also when a filter is applied. Only one of those two needed a change to your pattern. Say which one, and why the other needed nothing.

[Answer - D3 needed the pattern change (movies* instead of movies); D4 needed nothing, because a query string was never part of what is() checks.]

## Q4:
You deleted your old filter method but kept the empty store and update methods, even though none of the three can be reached by a URL. Explain the difference between them.

[Answer - store/update are unfinished (future work), the old filter method was finished-but-superseded (dead code) that's the "keep unfinished, delete replaced" rule.]