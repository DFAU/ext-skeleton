# Typo3 Extension Skeleton

Includes:
- dfau/coding-standard
- typo3/testing-framework


For more information about the features see the [README](skel/templates/README.md)
which will be installed to project root.

## Create Extension

To create a project with this skeleton simply use following command:

    composer create-project toujou/ext-skeleton <projectname> --repository="{\"url\": \"https://github.com/DFAU/ext-skeleton.git\", \"type\": \"vcs\"}" --stability=dev --remove-vcs

E.g. 

    composer create-project toujou/ext-skeleton hello-world --repository="{\"url\": \"https://github.com/DFAU/ext-skeleton.git\", \"type\": \"vcs\"}" --stability=dev --remove-vcs
