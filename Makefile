phpstan: ## Run statis analysis
	bin/phpstan analyse -l 7 -c phpstan.neon src/
.PHONY: phpstan
