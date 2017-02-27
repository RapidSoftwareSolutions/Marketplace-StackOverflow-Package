<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class StackOverflowTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'search',
            'getUserTopTags',
            'getUserTopQuestionTags',
            'getUserTopAnswerTags',
            'getMyTopTags',
            'getMyTopQuestionTags',
            'getMyTopAnswerTags',
            'getWikisForTags',
            'getSynonymsForTags',
            'getAllTagsSynonyms',
            'getSingleTagTopAskers',
            'getSingleTagTopAnswerers',
            'getUsersTags',
            'getMyTags',
            'getRelatedTags',
            'getTagsInfo',
            'getRequiredTags',
            'getModeratorTags',
            'getTags',
            'getUsersSuggestedEdits',
            'getMySuggestedEdits',
            'getSuggestedEditsByIds',
            'getAllSuggestedEdits',
            'getPostsSuggestedEdits',
            'getRevisionsByIds',
            'getRevisionsByPostIds',
            'createFilter',
            'getMyReputationHistory',
            'getUsersReputation',
            'getMyReputation',
            'getUserPrivileges',
            'getMyPrivileges',
            'getAllPrivileges',
            'getPostsByUserIds',
            'getMyPosts',
            'getPostsByIds',
            'getAllPosts',
            'getUserUnreadNotifications',
            'getMyUnreadNotifications',
            'getUserNotifications',
            'getMyNotifications',
            'getMyActivity',
            'getUserActivity',
            'getAssociatedAccountsByUserIds',
            'getMyAssociatedAccounts',
            'getUserUnreadInboxItems',
            'getMyUnreadInboxItems',
            'getUserInbox',
            'getMyInbox',
            'getStackoverflowStatistics',
            'getAllEvents',
            'getMentionedUsersComments',
            'getMentionedMeComments',
            'getUsersReplyComments',
            'getMyReplyComments',
            'getUsersComments',
            'getMyComments',
            'getQuestionsComments',
            'getPostsCommentsByIds',
            'deleteSingleComment',
            'undoUpvoteOnComment',
            'upvoteComment',
            'addFlagToComment',
            'getQuestionFlagOptions',
            'getCommentFlagOptions',
            'updateSingleComment',
            'createComment',
            'getCommentsByIds',
            'getAllComments',
            'getAnswersComments',
            'deleteSingleAnswer',
            'getUsersBadges',
            'getMyBadges',
            'getTagsAwardedBadges',
            'getAllNamedBadges',
            'getRecentlyAwardedBadges',
            'getBadgesByIds',
            'getAllBadges',
            'getUserTopAnswersByTags',
            'getMyTopAnswersByTags',
            'getAnswersByUserIds',
            'getMyAnswers',
            'createAnswerOnQuestion',
            'getAnswersToQuestions',
            'addFlagToAnswer',
            'getAnswerFlagOptions',
            'updateSingleAnswer',
            'undoUpvoteOnAnswer',
            'upvoteAnswer',
            'undoDownvoteOnAnswer',
            'downvoteAnswer',
            'undoAcceptOnAnswer',
            'acceptAnswer',
            'getAnswersByIds',
            'getAllAnswers',
            'getUserTimeline',
            'getMyTimeline',
            'getElectedModerators',
            'getModerators',
            'getUsers',
            'getUsersByIds',
            'getMe',
            'deAuthenticateApplication',
            'invalidateAccessToken',
            'getAccessToken'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/StackOverflow/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
