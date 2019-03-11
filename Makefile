phpstan: ## Run statis analysis
	bin/phpstan analyse -l 7 --debug -c phpstan.neon src/
.PHONY: phpstan
