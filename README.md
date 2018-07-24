# CodeLingo Resource Hub
_Find and Share CodeLingo Resources_

The CodeLingo Hub is an Open source collection of CodeLingo Resources.

* Lexicons - Libraries for DSLs, such as a language AST or VCS. Provides facts for queries.
* Tenets -  Patterns and anti-patterns in your software stack written in CLQL.
* Flows - pipelines for process augmentation and automation.

If you are first getting started with CodeLingo please [check out the getting started guide](https://codelingo.io/docs/getting-started).

To use CodeLingo locally, you will need to install the CLI tool which [can be found here](https://github.com/codelingo/lingo)

For any questions please **[join the conversation in Slack](https://join.slack.com/t/codelingo/shared_invite/enQtMzY4MzA5ODYwOTYzLWVhMjI1ODU1YmM3ODAxYWUxNWU5ZTI0NWI0MGVkMmUwZDZhNWYxNGRiNWY4ZDY0NzRkMjU5YTRiYWY2N2FlMmU)**


## Lexicons
Lexicons provide the DSL for querying against a particular domain, specifically programming languages, version control, runtime, and databases.

Lexicons are imported as part of a CLQL query. Please see the documentation for more information about using Lexicons.

Lexicons are currently available for the follow programming languages:

[Go](lexicons/ast/codelingo/go), [Python](lexicons/ast/codelingo/python), [PHP](lexicons/`ast/codelingo/php), [C++](lexicons/ast/codelingo/c++), [C#](lexicons/ast/codelingo/csharp)

If you are interested in writing your own lexicon, please contact us at hello@codelingo.io

## Tenets
Tenets are stored patterns and queries that can be applied to your software stack. All Tenets are constructed in CLQL and rely on specific lexicons.

Pre-written Tenets found in the Hub can be imported within your lingo file as follows: 
```
tenets:
  - import codelingo/go/empty-slice
```

All pre-written Tenets are available within this repository, and simply be explored through the file structure. For example, [here is a Tenet for Go](tenets/codelingo/go/goto) that uses of goto

For more information and about writing your own Tenets, please [see the documentation](https://codelingo.io/docs/concepts/tenets/)


**[Explore all Tenets](/tenets)**

## Flows
Tenets are integrated into your workflow through Flows. Flows are automated and semi-automated processes that rely heavily on functions to drive your software development lifecycle. They are completely customizable pipelines and can be configured directly in YAML or via the UI.

Currently the default Flow is the review Flow. Custom Flows are currently in development.

## Contributing

If you have new Tenets or Flows that you would like to contribute to the Hub, please raise a Pull Request directly against the repo.

## Other Resources

* [Roadmap](/company/ROADMAP.md)
* [Join Slack](https://join.slack.com/t/codelingo/shared_invite/enQtMzY4MzA5ODYwOTYzLWVhMjI1ODU1YmM3ODAxYWUxNWU5ZTI0NWI0MGVkMmUwZDZhNWYxNGRiNWY4ZDY0NzRkMjU5YTRiYWY2N2FlMmU)
* [Documentation](https://codelingo.io/docs)
* [IDE Plugins](https://github.com/codelingo/ideplugins)


---
[hello@codelingo.io](mailto:hello@codelingo.io) | [codelingo.io](https://codelingo.io)
