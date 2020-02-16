## Contribute

As part of the MoKee Open Source Project, this repository accepts commits
from our [Gerrit Code Review](https://mokeedev.review/) platform.

```sh
# setup
scp -p -P 29418 YOURNAME@mokeedev.review:hooks/commit-msg $(git rev-parse --git-dir)/hooks/
git remote add review ssh://YOURNAME@mokeedev.review:29418/MoKee/android_external_mokee_ServerController

# submit
git push review HEAD:refs/for/master
```