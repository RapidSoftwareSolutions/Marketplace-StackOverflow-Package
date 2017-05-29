[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/StackOverflow/functions?utm_source=RapidAPIGitHub_StackOverflowFunctions&utm_medium=button&utm_content=RapidAPI_GitHub) 

# StackOverflow Package
StackOverflow
* Domain: stackoverflow.com
* Credentials: clientId, clientSecret, clientKey

## How to get credentials: 
0. Go to [StackOverflow website](http://stackoverflow.com/) 
1. Log in or create a new account
2. [Register an app](http://stackapps.com/apps/oauth/register)
3. After creation your app you will see Client ID, Client Secret and Client Key

## StackOverflow.getAccessToken
Creates a new token

| Field       | Type       | Description
|-------------|------------|----------
| clientId    | credentials| The client id obtained from StackOverflow.
| clientSecret| credentials| The client secret obtained from StackOverflow.
| redirectUri | String     | Your redirect URI
| code        | String     | Code from the user.

## StackOverflow.invalidateAccessToken
Immediately expires the access token passed. This method is meant to allow an application to discard any active access tokens it no longer needs.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token obtained from StackOverflow.

## StackOverflow.deAuthenticateApplication
This method is meant for uninstalling applications, recovering from access_token leaks

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Access token obtained from StackOverflow.

## StackOverflow.getMe
Returns the user associated with the passed accessToken

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: reputation(default), creation, name, modified.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersByIds
Returns information about the user with provided Ids

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of the user as array.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: reputation(default), creation, name, modified.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsers
Returns all users on a site.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| inName      | String     | The inName parameter lets consumers filter the results down to just those users with a certain substring in their display name.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: reputation(default), creation, name, modified.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getModerators
Gets those users on a site who can exercise moderation powers. Note, employees of Stack Exchange Inc. will be returned if they have been granted moderation powers on a site even if they have never been appointed or elected explicitly. This method checks abilities, not the manner in which they were obtained.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: reputation(default), creation, name, modified.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getElectedModerators
Returns those users on a site who both have moderator powers, and were actually elected. This method excludes Stack Exchange Inc. employees, unless they were actually elected moderators on a site (which can only have happened prior to their employment).

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: reputation(default), creation, name, modified.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyTimeline
Get a subset of the actions of that have been taken by the users identified by accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getUserTimeline
Get a subset of the actions of that have been taken by the users identified by id.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getAllAnswers
Returns all the undeleted answers in the system.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAnswersBgetAnswersByIds
Returns answers in the system with provided Ids.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| answerIds   | Array      | List of ids as array.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.acceptAnswer
Accepts an answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to accept

## StackOverflow.undoAcceptOnAnswer
Undo accept on answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to undo accept

## StackOverflow.downvoteAnswer
Downvote an answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to downvote

## StackOverflow.undoDownvoteOnAnswer
Undo downvote on answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to undo downvote

## StackOverflow.upvoteAnswer
Upvote an answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to upvote

## StackOverflow.undoUpvoteOnAnswer
Undo upvote on answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to undo upvote

## StackOverflow.updateSingleAnswer
Updates answer

| Field        | Type       | Description
|--------------|------------|----------
| clientKey    | credentials| Client Key for your application
| accessToken  | String     | Access token obtained from StackOverflow.
| answerId     | Number     | Id of the answer to undo downvote
| answerBody   | String     | Body of the answer update
| answerComment| String     | Comment of the answer update

## StackOverflow.getAnswerFlagOptions
Returns the different flags that the user identified with an accessToken can create for the answer identified by answerId. 

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer

## StackOverflow.addFlagToAnswer
Adds flag to the answer

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer
| flagId     | Number     | Id of the flag

## StackOverflow.getAnswersToQuestions
Gets the answers to a set of questions identified in ids.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| questionIds | Array      | Question ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.createAnswerOnQuestion
Create a new answer on the given question.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| questionId | Number     | Id of the question to answer
| answerBody | String     | Body of the answer

## StackOverflow.getMyAnswers
Returns the answers owned by the user associated with the given accessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAnswersByUserIds
Returns the answers the users in userIds have posted.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of the users as array.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyAnswers
Returns the top 30 answers the user associated with the given accessToken has posted in response to questions with the given tags.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| tagList     | String     | List of tags.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUserTopAnswersByTags
Returns the top 30 answers the user associated with the given userId has posted in response to questions with the given tags.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| tagList     | Array      | Array of tags.
| userId      | Number     | Id of the user
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAllBadges
Returns all the badges in the system.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| inName      | String     | The inName parameter lets consumers filter the results down to just those badges with a certain substring in their display name.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name, type.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getBadgesByIds
Gets the badges identified in badgeIds.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| badgeIds    | Array      | Badge Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name, type.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getRecentlyAwardedBadges
Returns recently awarded badges in the system.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getAllNamedBadges
Gets all explicitly named badges in the system.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| inName      | String     | The inName parameter lets consumers filter the results down to just those badges with a certain substring in their display name.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getTagsAwardedBadges
Gets all explicitly named badges in the system.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| inName      | String     | The inName parameter lets consumers filter the results down to just those badges with a certain substring in their tag name.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyBadges
Returns the badges earned by the user associated with the given accessToken

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name, type
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersBadges
Returns the badges earned by the users associated with the given userIds

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of the users as array.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: rank(default), name, type
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.deleteSingleAnswer
Deletes an answer.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| answerId   | Number     | Id of the answer to delete

## StackOverflow.getAnswersComments
Gets the comments on a set of answers.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| answerIds   | Array      | Answer Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAllComments
Gets all the comments on the site.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getCommentsByIds
Gets all the comments with commentIds.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| commentIds  | Array      | Ids of the comments.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.createComment
Create a new comment.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| postId     | Number     | Id of the post to comment
| commentBody| String     | Body of the comment

## StackOverflow.updateSingleComment
Updates comment

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment to update
| commentBody| String     | Body of the comment

## StackOverflow.getCommentFlagOptions
Returns the different flags that the user identified with an accessToken can create for the comment identified by commentId.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment

## StackOverflow.getQuestionFlagOptions
Returns the different flags that the user identified with an accessToken can create for the question identified by questionId.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| questionId | Number     | Id of the question

## StackOverflow.addFlagToComment
Adds flag to the comment

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment
| flagId     | Number     | Id of the flag

## StackOverflow.upvoteComment
Upvotes the comment.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment to upvote

## StackOverflow.undoUpvoteOnComment
Undo upvote on comment.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment to undo upvote

## StackOverflow.deleteSingleComment
Deletes a comment.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client Key for your application
| accessToken| String     | Access token obtained from StackOverflow.
| commentId  | Number     | Id of the comment to delete

## StackOverflow.getPostsCommentsByIds
Gets the comments on a set of posts.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| postIds     | Array      | Post Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyComments
Returns the comments owned by the user associated with the given accessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersComments
Gets the comments of users in userIds

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | User Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyReplyComments
Returns the comments owned by the user associated with the given accessToken that are in reply to the user identified by userId.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userId      | Number     | User Id
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersReplyComments
Get the comments that the users in commentatorIds have posted in reply to the single user identified in userId.

| Field         | Type       | Description
|---------------|------------|----------
| clientKey     | credentials| Client key obtained from StackOverflow
| accessToken   | String     | Access token obtained from StackOverflow.
| commentatorIds| Array      | Commentators' Ids
| userId        | Number     | User Id
| sortingOrder  | String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy        | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber    | Number     | Number of the page
| pageSize      | Number     | Size of the page
| fromDate      | Number     | Defines the range of creation_date (unixtime format)
| toDate        | Number     | Defines the range of creation_date (unixtime format)
| min           | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max           | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMentionedMeComments
Returns the comments mentioning the user associated with the given accessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMentionedUsersComments
Returns the comments mentioning the users in userIds.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of users as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAllEvents
Returns a stream of events that have occurred on the site.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getStackoverflowStatistics
Returns a collection of statistics about the site.

No arguments.

## StackOverflow.getMyInbox
Returns a user's inbox associated with accessToken

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserInbox
Returns a user's with provided Id inbox 

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyUnreadInboxItems
Returns the unread items from a user's inbox associated with accessToken

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserUnreadInboxItems
Returns the unread items in a user's inbox.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyAssociatedAccounts
Returns all of a user's associated accounts, given an acccessToken for them.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| accountTypes| String     | You can filter the accountTypes returned by this method with the types parameter. Specify, semicolon delimited, main_site or meta_site to filter by site.

## StackOverflow.getAssociatedAccountsByUserIds
Returns all of a user's associated accounts, given their userIds

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | List of user ids as array.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| accountTypes| String     | You can filter the accountTypes returned by this method with the types parameter. Specify, semicolon delimited, main_site or meta_site to filter by site.

## StackOverflow.getUserActivity
Returns a summary of a user's activity across the Stack Exchange network, given their userId.

| Field        | Type       | Description
|--------------|------------|----------
| clientKey    | credentials| Client key obtained from StackOverflow
| accessToken  | String     | Access token obtained from StackOverflow.
| userId       | Number     | Id of the user
| pageNumber   | Number     | Number of the page
| pageSize     | Number     | Size of the page
| fromDate     | Number     | Defines the range of creation_date (unixtime format)
| toDate       | Number     | Defines the range of creation_date (unixtime format)
| activityTypes| String     | Type of network activity

## StackOverflow.getMyActivity
Returns a summary of a user's activity across the Stack Exchange network associated with provided accessToken.

| Field        | Type       | Description
|--------------|------------|----------
| clientKey    | credentials| Client key obtained from StackOverflow
| accessToken  | String     | Access token obtained from StackOverflow.
| pageNumber   | Number     | Number of the page
| pageSize     | Number     | Size of the page
| fromDate     | Number     | Defines the range of creation_date (unixtime format)
| toDate       | Number     | Defines the range of creation_date (unixtime format)
| activityTypes| String     | Type of network activity

## StackOverflow.getMyNotifications
Returns a user's notifications, given an accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserNotifications
Returns a user's notifications with provided userId.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyUnreadNotifications
Returns a user's unread notifications, given an accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserUnreadNotifications
Returns a user's unread notifications with provided userId.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getAllPosts
Fetches all posts (questions and answers) on the site.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getPostsByIds
Fetches posts (questions and answers) on the site with provided Ids.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| postIds     | Array      | Ids of posts.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMyPosts
Fetches all posts (questions and answers) of the user with provided accessToken.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getPostsByUserIds
Fetches posts (questions and answers) on the site made by users with provided Ids.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of users.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: activity(default), creation, votes.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAllPrivileges
Returns the earnable privileges on a site.

| Field     | Type  | Description
|-----------|-------|----------
| pageNumber| Number| Number of the page
| pageSize  | Number| Size of the page

## StackOverflow.getMyPrivileges
Returns the privileges on a site for the user identified by provided accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserPrivileges
Returns the privileges on a site for the user identified by provided userId.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | Number     | Id of the user.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyReputation
Returns the reputation on a site for the user identified by provided accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.

## StackOverflow.getUsersReputation
Returns the reputation on a site for the user identified by provided userIds.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userIds    | Array      | Ids of the users.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getMyReputationHistory
Returns the reputation history on a site for the user identified by provided accessToken.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.createFilter
Creates a new filter given a list of includes, excludes, a base filter, and whether or not this filter should be unsafe.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| includeList| String     | List of includes
| exludeList | String     | List of excludes
| baseFilter | String     | Base filter
| unsafe     | Boolean    | Is filter safe or not

## StackOverflow.getRevisionsByPostIds
Returns edit revisions for the posts identified in postsIds

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| postIds    | Array      | Ids of the posts.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getRevisionsByIds
Returns edit revisions identified by revisionsIds

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| revisionIds| Array      | Ids of the revisions.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page
| fromDate   | Number     | Defines the range of creation_date (unixtime format)
| toDate     | Number     | Defines the range of creation_date (unixtime format)

## StackOverflow.getPostsSuggestedEdits
Returns suggested edits on the posts identified in ids.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| postIds     | Array      | Post Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), approval, rejection.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getAllSuggestedEdits
Returns all the suggested edits in the systems.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), approval, rejection.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getSuggestedEditsByIds
Returns suggested edits identified in editIds

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| editIds     | Array      | Edit Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), approval, rejection.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getMySuggestedEdits
Returns the suggested edits the user identified by accessToken has submitted.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), approval, rejection.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersSuggestedEdits
Returns the suggested edits a users in userIds have submitted.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | User Ids as array
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: creation(default), approval, rejection.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getTags
Returns the tags found on a site.

| Field       | Type  | Description
|-------------|-------|----------
| inName      | String| Filters down to tags that contain a certain substring
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getModeratorTags
Returns the tags found on a site that only moderators can use.

| Field       | Type  | Description
|-------------|-------|----------
| inName      | String| Filters down to tags that contain a certain substring
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getRequiredTags
Returns the tags found on a site that fulfill required tag constraints on questions.

| Field       | Type  | Description
|-------------|-------|----------
| inName      | String| Filters down to tags that contain a certain substring
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getTagsInfo
Returns tag objects representing the tags in tagNames found on the site.

| Field       | Type  | Description
|-------------|-------|----------
| tagNames    | Array | List of tag names as array
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getRelatedTags
Returns the tags that are most related to those in tagNames.

| Field     | Type  | Description
|-----------|-------|----------
| tagNames  | Array | List of tag names as array
| pageNumber| Number| Number of the page
| pageSize  | Number| Size of the page

## StackOverflow.getMyTags
Returns the tags the user identified by the accessToken passed is active in.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getUsersTags
Returns the tags the users identified in userIds have been active in.

| Field       | Type       | Description
|-------------|------------|----------
| clientKey   | credentials| Client key obtained from StackOverflow
| accessToken | String     | Access token obtained from StackOverflow.
| userIds     | Array      | Ids of users
| sortingOrder| String     | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String     | Parameter to sort by. Possible values: popular(default), activity, name.
| pageNumber  | Number     | Number of the page
| pageSize    | Number     | Size of the page
| fromDate    | Number     | Defines the range of creation_date (unixtime format)
| toDate      | Number     | Defines the range of creation_date (unixtime format)
| min         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number     | Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getSingleTagTopAnswerers
Returns the top 30 answerers active in a single tag, of either all-time or the last 30 days.

| Field     | Type  | Description
|-----------|-------|----------
| tagName   | String| Name of the tag
| period    | String| Period of the selection. Possible valued: all_time(default), month
| pageNumber| Number| Number of the page
| pageSize  | Number| Size of the page

## StackOverflow.getSingleTagTopAskers
Returns the top 30 askers active in a single tag, of either all-time or the last 30 days.

| Field     | Type  | Description
|-----------|-------|----------
| tagName   | String| Name of the tag
| period    | String| Period of the selection. Possible valued: all_time(default), month
| pageNumber| Number| Number of the page
| pageSize  | Number| Size of the page

## StackOverflow.getAllTagsSynonyms
Returns all tag synonyms found a site.

| Field       | Type  | Description
|-------------|-------|----------
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: creation(default), activity, applied.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getSynonymsForTags
Gets all the synonyms that point to the tags identified in tagNames

| Field       | Type  | Description
|-------------|-------|----------
| tagNames    | Array | Array of tags
| sortingOrder| String| Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy      | String| Parameter to sort by. Possible values: creation(default), activity, applied.
| pageNumber  | Number| Number of the page
| pageSize    | Number| Size of the page
| fromDate    | Number| Defines the range of creation_date (unixtime format)
| toDate      | Number| Defines the range of creation_date (unixtime format)
| min         | Number| Specify the range of a field must fall in (that field being specified by sortBy)
| max         | Number| Specify the range of a field must fall in (that field being specified by sortBy)

## StackOverflow.getWikisForTags
Gets all the synonyms that point to the tags identified in tagNames

| Field     | Type  | Description
|-----------|-------|----------
| tagNames  | Array | Array of tags
| pageNumber| Number| Number of the page
| pageSize  | Number| Size of the page

## StackOverflow.getMyTopAnswerTags
Returns the user identified by accessToken's top 30 tags by answer score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyTopQuestionTags
Returns the user identified by accessToken's top 30 tags by question score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getMyTopTags
Returns the user identified by accessToken's top 30 tags by combined question and answer score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserTopAnswerTags
Returns the user identified by userId top 30 tags by answer score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | String     | id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserTopQuestionTags
Returns the user identified by userId top 30 tags by question score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | String     | id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.getUserTopTags
Returns the user identified by userId top 30 tags by combined question and answer score.

| Field      | Type       | Description
|------------|------------|----------
| clientKey  | credentials| Client key obtained from StackOverflow
| accessToken| String     | Access token obtained from StackOverflow.
| userId     | String     | id of the user
| pageNumber | Number     | Number of the page
| pageSize   | Number     | Size of the page

## StackOverflow.search
Returns the user identified by userId top 30 tags by combined question and answer score.

| Field        | Type   | Description
|--------------|--------|----------
| searchString | String | A free form text parameter, will match all question properties based on an undocumented algorithm.
| sortingOrder | String | Ascending or descending sorting order. Possible values: asc and desc(default).
| sortBy       | String | Parameter to sort by. Possible values: activity(default), creation, votes, relevance.
| pageNumber   | Number | Number of the page
| pageSize     | Number | Size of the page
| fromDate     | Number | Defines the range of creation_date (unixtime format)
| toDate       | Number | Defines the range of creation_date (unixtime format)
| min          | Number | Specify the range of a field must fall in (that field being specified by sortBy)
| max          | Number | Specify the range of a field must fall in (that field being specified by sortBy)
| accepted     | Boolean| true to return only questions with accepted answers, false to return only those without.
| minAnswers   | Number | The minimum number of answers returned questions must have
| questionBody | String | Text which must appear in returned questions' bodies.
| closed       | Boolean| true to return only closed questions, false to return only open ones
| migrated     | Boolean| true to return only questions migrated away from a site, false to return only those not.
| notice       | Boolean| true to return only questions with post notices, false to return only those without.
| exceptTags   | String | A semicolon delimited list of tags, none of which will be present on returned questions. At least one additional parameter must be set if exceptTags is set, for performance reasons.
| withTags     | String | A semicolon delimited list of tags, of which at least one will be present on all returned questions.
| questionTitle| String | Text which must appear in returned questions' titles.
| questionerId | Number | The id of the user who must own the questions returned.
| withUrl      | String | A url which must be contained in a post, may include a wildcard.
| minViews     | Number | The minimum number of views returned questions must have.
| wiki         | Boolean| True to return only community wiki questions, false to return only non-community wiki ones.

