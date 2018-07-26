

<h3 align="center"> codelingo </h3>

<p align="center">
  <b> Automate pull request reviews on GitHub </b>
</p>

<p align="center">
  <a href="https://github.com/apps/codelingo/installations/new" target="_blank">
    <img width="295" height="38" src="https://raw.githubusercontent.com/codelingo/codelingo/master/public/img/install.png" />
  </a>
</p>

## Overview

Codelingo is a Platform as a Service (PaaS) that helps software development teams produce better software, faster - together. It treats **your software as data** and **automates your workflows**, called Flows, with the rules and patterns you define, called Tenets.

Our flagship Flow is the Review Flow, which checks a repository's pull requests conform to its project specific patterns.

## Mission

We are building a community to develop and share Tenets and Flows for software development. To this end, Codelingo is **free for open source repos**. Our vision is for Codelingo to be the protocol on top of which the insights and experience of developers across the industry can be shared and applied.

## Quick Starts

### Playground

Write, generate and run Tenets on the [playground](https://codelingo.io/playground).

<!-- TODO image of the playground UI -->

<!-- TODO CLQL tutorial -->

### GitHub Review Flow

1. Install the [Codelingo GitHub App](https://github.com/apps/codelingo).

2. Write the following .lingo.yaml to the root of your repo:

      ```yaml
      # .lingo.yaml file

      tenets:
         - import: codelingo/go
      ```

3. Done! Every pull request will now be checked against the go Tenet bundle we imported above. 

<!-- TODO add screenshot of review comment -->

Other Tenet bundles (including for other languages) from the community can be found under the [tenets directory](https://github.com/codelingo/hub/tree/master/tenets) in this repository.

<!-- TODO add instructions on how to interact with Review Flow with GitHub comments -->

### Local Review Flow

To run the Review Flow against repositories on your local machine:

1. Install the [lingo CLI](https://github.com/codelingo/lingo/releases/latest).

2. Set it up with the following commands:

```bash
# Run this command from anywhere. Follow the prompts to set up Codelingo on your machine.
$ lingo config setup

# Run this command inside a git repository to add a default .lingo.yaml file in the current directory.
$ lingo init
```

3. Replace the content of the .lingo.yaml file we wrote above with:


```yaml
  tenets:
    - import: codelingo/go
```

4. Run the Review Flow:

```bash
# Run this command from the same directory as the .lingo.yaml file or any of its sub directories.
$ lingo run review
```

This will check your source code against the go Tenet bundle we imported above.

<!-- TODO: screen shot of review result -->

## Next Steps

See the [getting started guide](https://www.codelingo.io/docs/#getting-started) to learn more about Tenets, Flows and the Codelingo Query Language.

## Resources

### Community

<!-- TODO slack numbers -->

 - [slack](https://join.slack.com/t/codelingo/shared_invite/enQtMzY4MzA5ODYwOTYzLWVhMjI1ODU1YmM3ODAxYWUxNWU5ZTI0NWI0MGVkMmUwZDZhNWYxNGRiNWY4ZDY0NzRkMjU5YTRiYWY2N2FlMmU)
 - [codelingo.io/discuss](http://codelingo.io/discuss)
 - [hello@codelingo.io](mailto:hello@codelingo.io)

### Learn

- [codelingo.io/playground](https://codelingo.io/playground) - Write, automatically generate and run Tenets and Flows online.
- [codelingo.io/docs](https://codelingo.io/docs) - Learn to write (and automatically generate!) Tenets and compose Flows.

### Repos 

- [github.com/codelingo/lingo](https://github.com/codelingo/lingo) - CLI client for Codelingo.
- [github.com/codelingo/ideplugins](https://github.com/codelingo/ideplugins) - Run Flows directly in your IDE (Note: WIP).

<!-- TODO: add these
- [github.com/codelingo/lexiconsdk](https://github.com/codelingo/lexiconsdk) - Add support for new Lexicons
- [github.com/codelingo/flowsdk](https://github.com/codelingo/flowsdk)
-->

<!-- TODO: lexiconsdk -->

## About Us

We are a small development team from New Zealand with a passion for the art of software development in itself!

Check out our team page here: <a href="https://www.codelingo.io/team" target="_blank">codelingo.io/team</a>.
