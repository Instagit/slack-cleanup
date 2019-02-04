# Slack Cleanup

Since Slack's file management is somewhat lacking, you can use this script to delete all your team's files automatically and save the time you spend repeatedly asking team members to delete their files manually so you don't hit the storage limit.

It requires a certain amount of trust, as the legacy tokens can be used for anything in Slack.

Steps:

1. Have each team member create a token (https://api.slack.com/custom-integrations/legacy-tokens).
2. Add names and tokens to **$token_list[]** (*line 5*).
3. Specify the time files should be kept for with **$timestamp** (*line 4*). Default is one month.
4. Run the script.
5. **[optional]** Add script to crontab to run it regularly.

The script is based on https://gist.github.com/kasperhartwich/dec5923ffcba55686dfb.

[Slack legacy tokens](https://api.slack.com/custom-integrations/legacy-tokens):

````plain
You're reading this because you're looking for info on legacy custom integrations - an outdated way for teams to integrate with Slack. These integrations lack newer features and they will be deprecated and possibly removed in the future. We do not recommend their use.
````

¯\\\_(ツ)_/¯