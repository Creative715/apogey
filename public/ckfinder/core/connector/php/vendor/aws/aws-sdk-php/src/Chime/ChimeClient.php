<?php
namespace Aws\Chime;

use Aws\AwsClient;
use Aws\Result;
use GuzzleHttp\Promise\Promise;

/**
 * This client is used to interact with the **Amazon Chime** service.
 * @method Result associatePhoneNumberWithUser(array $args = [])
 * @method Promise associatePhoneNumberWithUserAsync(array $args = [])
 * @method Result associatePhoneNumbersWithVoiceConnector(array $args = [])
 * @method Promise associatePhoneNumbersWithVoiceConnectorAsync(array $args = [])
 * @method Result associatePhoneNumbersWithVoiceConnectorGroup(array $args = [])
 * @method Promise associatePhoneNumbersWithVoiceConnectorGroupAsync(array $args = [])
 * @method Result associateSigninDelegateGroupsWithAccount(array $args = [])
 * @method Promise associateSigninDelegateGroupsWithAccountAsync(array $args = [])
 * @method Result batchCreateAttendee(array $args = [])
 * @method Promise batchCreateAttendeeAsync(array $args = [])
 * @method Result batchCreateRoomMembership(array $args = [])
 * @method Promise batchCreateRoomMembershipAsync(array $args = [])
 * @method Result batchDeletePhoneNumber(array $args = [])
 * @method Promise batchDeletePhoneNumberAsync(array $args = [])
 * @method Result batchSuspendUser(array $args = [])
 * @method Promise batchSuspendUserAsync(array $args = [])
 * @method Result batchUnsuspendUser(array $args = [])
 * @method Promise batchUnsuspendUserAsync(array $args = [])
 * @method Result batchUpdatePhoneNumber(array $args = [])
 * @method Promise batchUpdatePhoneNumberAsync(array $args = [])
 * @method Result batchUpdateUser(array $args = [])
 * @method Promise batchUpdateUserAsync(array $args = [])
 * @method Result createAccount(array $args = [])
 * @method Promise createAccountAsync(array $args = [])
 * @method Result createAppInstance(array $args = [])
 * @method Promise createAppInstanceAsync(array $args = [])
 * @method Result createAppInstanceAdmin(array $args = [])
 * @method Promise createAppInstanceAdminAsync(array $args = [])
 * @method Result createAppInstanceUser(array $args = [])
 * @method Promise createAppInstanceUserAsync(array $args = [])
 * @method Result createAttendee(array $args = [])
 * @method Promise createAttendeeAsync(array $args = [])
 * @method Result createBot(array $args = [])
 * @method Promise createBotAsync(array $args = [])
 * @method Result createChannel(array $args = [])
 * @method Promise createChannelAsync(array $args = [])
 * @method Result createChannelBan(array $args = [])
 * @method Promise createChannelBanAsync(array $args = [])
 * @method Result createChannelMembership(array $args = [])
 * @method Promise createChannelMembershipAsync(array $args = [])
 * @method Result createChannelModerator(array $args = [])
 * @method Promise createChannelModeratorAsync(array $args = [])
 * @method Result createMeeting(array $args = [])
 * @method Promise createMeetingAsync(array $args = [])
 * @method Result createMeetingDialOut(array $args = [])
 * @method Promise createMeetingDialOutAsync(array $args = [])
 * @method Result createMeetingWithAttendees(array $args = [])
 * @method Promise createMeetingWithAttendeesAsync(array $args = [])
 * @method Result createPhoneNumberOrder(array $args = [])
 * @method Promise createPhoneNumberOrderAsync(array $args = [])
 * @method Result createProxySession(array $args = [])
 * @method Promise createProxySessionAsync(array $args = [])
 * @method Result createRoom(array $args = [])
 * @method Promise createRoomAsync(array $args = [])
 * @method Result createRoomMembership(array $args = [])
 * @method Promise createRoomMembershipAsync(array $args = [])
 * @method Result createSipMediaApplication(array $args = [])
 * @method Promise createSipMediaApplicationAsync(array $args = [])
 * @method Result createSipMediaApplicationCall(array $args = [])
 * @method Promise createSipMediaApplicationCallAsync(array $args = [])
 * @method Result createSipRule(array $args = [])
 * @method Promise createSipRuleAsync(array $args = [])
 * @method Result createUser(array $args = [])
 * @method Promise createUserAsync(array $args = [])
 * @method Result createVoiceConnector(array $args = [])
 * @method Promise createVoiceConnectorAsync(array $args = [])
 * @method Result createVoiceConnectorGroup(array $args = [])
 * @method Promise createVoiceConnectorGroupAsync(array $args = [])
 * @method Result deleteAccount(array $args = [])
 * @method Promise deleteAccountAsync(array $args = [])
 * @method Result deleteAppInstance(array $args = [])
 * @method Promise deleteAppInstanceAsync(array $args = [])
 * @method Result deleteAppInstanceAdmin(array $args = [])
 * @method Promise deleteAppInstanceAdminAsync(array $args = [])
 * @method Result deleteAppInstanceStreamingConfigurations(array $args = [])
 * @method Promise deleteAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method Result deleteAppInstanceUser(array $args = [])
 * @method Promise deleteAppInstanceUserAsync(array $args = [])
 * @method Result deleteAttendee(array $args = [])
 * @method Promise deleteAttendeeAsync(array $args = [])
 * @method Result deleteChannel(array $args = [])
 * @method Promise deleteChannelAsync(array $args = [])
 * @method Result deleteChannelBan(array $args = [])
 * @method Promise deleteChannelBanAsync(array $args = [])
 * @method Result deleteChannelMembership(array $args = [])
 * @method Promise deleteChannelMembershipAsync(array $args = [])
 * @method Result deleteChannelMessage(array $args = [])
 * @method Promise deleteChannelMessageAsync(array $args = [])
 * @method Result deleteChannelModerator(array $args = [])
 * @method Promise deleteChannelModeratorAsync(array $args = [])
 * @method Result deleteEventsConfiguration(array $args = [])
 * @method Promise deleteEventsConfigurationAsync(array $args = [])
 * @method Result deleteMeeting(array $args = [])
 * @method Promise deleteMeetingAsync(array $args = [])
 * @method Result deletePhoneNumber(array $args = [])
 * @method Promise deletePhoneNumberAsync(array $args = [])
 * @method Result deleteProxySession(array $args = [])
 * @method Promise deleteProxySessionAsync(array $args = [])
 * @method Result deleteRoom(array $args = [])
 * @method Promise deleteRoomAsync(array $args = [])
 * @method Result deleteRoomMembership(array $args = [])
 * @method Promise deleteRoomMembershipAsync(array $args = [])
 * @method Result deleteSipMediaApplication(array $args = [])
 * @method Promise deleteSipMediaApplicationAsync(array $args = [])
 * @method Result deleteSipRule(array $args = [])
 * @method Promise deleteSipRuleAsync(array $args = [])
 * @method Result deleteVoiceConnector(array $args = [])
 * @method Promise deleteVoiceConnectorAsync(array $args = [])
 * @method Result deleteVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method Promise deleteVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method Result deleteVoiceConnectorGroup(array $args = [])
 * @method Promise deleteVoiceConnectorGroupAsync(array $args = [])
 * @method Result deleteVoiceConnectorOrigination(array $args = [])
 * @method Promise deleteVoiceConnectorOriginationAsync(array $args = [])
 * @method Result deleteVoiceConnectorProxy(array $args = [])
 * @method Promise deleteVoiceConnectorProxyAsync(array $args = [])
 * @method Result deleteVoiceConnectorStreamingConfiguration(array $args = [])
 * @method Promise deleteVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method Result deleteVoiceConnectorTermination(array $args = [])
 * @method Promise deleteVoiceConnectorTerminationAsync(array $args = [])
 * @method Result deleteVoiceConnectorTerminationCredentials(array $args = [])
 * @method Promise deleteVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method Result describeAppInstance(array $args = [])
 * @method Promise describeAppInstanceAsync(array $args = [])
 * @method Result describeAppInstanceAdmin(array $args = [])
 * @method Promise describeAppInstanceAdminAsync(array $args = [])
 * @method Result describeAppInstanceUser(array $args = [])
 * @method Promise describeAppInstanceUserAsync(array $args = [])
 * @method Result describeChannel(array $args = [])
 * @method Promise describeChannelAsync(array $args = [])
 * @method Result describeChannelBan(array $args = [])
 * @method Promise describeChannelBanAsync(array $args = [])
 * @method Result describeChannelMembership(array $args = [])
 * @method Promise describeChannelMembershipAsync(array $args = [])
 * @method Result describeChannelMembershipForAppInstanceUser(array $args = [])
 * @method Promise describeChannelMembershipForAppInstanceUserAsync(array $args = [])
 * @method Result describeChannelModeratedByAppInstanceUser(array $args = [])
 * @method Promise describeChannelModeratedByAppInstanceUserAsync(array $args = [])
 * @method Result describeChannelModerator(array $args = [])
 * @method Promise describeChannelModeratorAsync(array $args = [])
 * @method Result disassociatePhoneNumberFromUser(array $args = [])
 * @method Promise disassociatePhoneNumberFromUserAsync(array $args = [])
 * @method Result disassociatePhoneNumbersFromVoiceConnector(array $args = [])
 * @method Promise disassociatePhoneNumbersFromVoiceConnectorAsync(array $args = [])
 * @method Result disassociatePhoneNumbersFromVoiceConnectorGroup(array $args = [])
 * @method Promise disassociatePhoneNumbersFromVoiceConnectorGroupAsync(array $args = [])
 * @method Result disassociateSigninDelegateGroupsFromAccount(array $args = [])
 * @method Promise disassociateSigninDelegateGroupsFromAccountAsync(array $args = [])
 * @method Result getAccount(array $args = [])
 * @method Promise getAccountAsync(array $args = [])
 * @method Result getAccountSettings(array $args = [])
 * @method Promise getAccountSettingsAsync(array $args = [])
 * @method Result getAppInstanceRetentionSettings(array $args = [])
 * @method Promise getAppInstanceRetentionSettingsAsync(array $args = [])
 * @method Result getAppInstanceStreamingConfigurations(array $args = [])
 * @method Promise getAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method Result getAttendee(array $args = [])
 * @method Promise getAttendeeAsync(array $args = [])
 * @method Result getBot(array $args = [])
 * @method Promise getBotAsync(array $args = [])
 * @method Result getChannelMessage(array $args = [])
 * @method Promise getChannelMessageAsync(array $args = [])
 * @method Result getEventsConfiguration(array $args = [])
 * @method Promise getEventsConfigurationAsync(array $args = [])
 * @method Result getGlobalSettings(array $args = [])
 * @method Promise getGlobalSettingsAsync(array $args = [])
 * @method Result getMeeting(array $args = [])
 * @method Promise getMeetingAsync(array $args = [])
 * @method Result getMessagingSessionEndpoint(array $args = [])
 * @method Promise getMessagingSessionEndpointAsync(array $args = [])
 * @method Result getPhoneNumber(array $args = [])
 * @method Promise getPhoneNumberAsync(array $args = [])
 * @method Result getPhoneNumberOrder(array $args = [])
 * @method Promise getPhoneNumberOrderAsync(array $args = [])
 * @method Result getPhoneNumberSettings(array $args = [])
 * @method Promise getPhoneNumberSettingsAsync(array $args = [])
 * @method Result getProxySession(array $args = [])
 * @method Promise getProxySessionAsync(array $args = [])
 * @method Result getRetentionSettings(array $args = [])
 * @method Promise getRetentionSettingsAsync(array $args = [])
 * @method Result getRoom(array $args = [])
 * @method Promise getRoomAsync(array $args = [])
 * @method Result getSipMediaApplication(array $args = [])
 * @method Promise getSipMediaApplicationAsync(array $args = [])
 * @method Result getSipMediaApplicationLoggingConfiguration(array $args = [])
 * @method Promise getSipMediaApplicationLoggingConfigurationAsync(array $args = [])
 * @method Result getSipRule(array $args = [])
 * @method Promise getSipRuleAsync(array $args = [])
 * @method Result getUser(array $args = [])
 * @method Promise getUserAsync(array $args = [])
 * @method Result getUserSettings(array $args = [])
 * @method Promise getUserSettingsAsync(array $args = [])
 * @method Result getVoiceConnector(array $args = [])
 * @method Promise getVoiceConnectorAsync(array $args = [])
 * @method Result getVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method Promise getVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method Result getVoiceConnectorGroup(array $args = [])
 * @method Promise getVoiceConnectorGroupAsync(array $args = [])
 * @method Result getVoiceConnectorLoggingConfiguration(array $args = [])
 * @method Promise getVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method Result getVoiceConnectorOrigination(array $args = [])
 * @method Promise getVoiceConnectorOriginationAsync(array $args = [])
 * @method Result getVoiceConnectorProxy(array $args = [])
 * @method Promise getVoiceConnectorProxyAsync(array $args = [])
 * @method Result getVoiceConnectorStreamingConfiguration(array $args = [])
 * @method Promise getVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method Result getVoiceConnectorTermination(array $args = [])
 * @method Promise getVoiceConnectorTerminationAsync(array $args = [])
 * @method Result getVoiceConnectorTerminationHealth(array $args = [])
 * @method Promise getVoiceConnectorTerminationHealthAsync(array $args = [])
 * @method Result inviteUsers(array $args = [])
 * @method Promise inviteUsersAsync(array $args = [])
 * @method Result listAccounts(array $args = [])
 * @method Promise listAccountsAsync(array $args = [])
 * @method Result listAppInstanceAdmins(array $args = [])
 * @method Promise listAppInstanceAdminsAsync(array $args = [])
 * @method Result listAppInstanceUsers(array $args = [])
 * @method Promise listAppInstanceUsersAsync(array $args = [])
 * @method Result listAppInstances(array $args = [])
 * @method Promise listAppInstancesAsync(array $args = [])
 * @method Result listAttendeeTags(array $args = [])
 * @method Promise listAttendeeTagsAsync(array $args = [])
 * @method Result listAttendees(array $args = [])
 * @method Promise listAttendeesAsync(array $args = [])
 * @method Result listBots(array $args = [])
 * @method Promise listBotsAsync(array $args = [])
 * @method Result listChannelBans(array $args = [])
 * @method Promise listChannelBansAsync(array $args = [])
 * @method Result listChannelMemberships(array $args = [])
 * @method Promise listChannelMembershipsAsync(array $args = [])
 * @method Result listChannelMembershipsForAppInstanceUser(array $args = [])
 * @method Promise listChannelMembershipsForAppInstanceUserAsync(array $args = [])
 * @method Result listChannelMessages(array $args = [])
 * @method Promise listChannelMessagesAsync(array $args = [])
 * @method Result listChannelModerators(array $args = [])
 * @method Promise listChannelModeratorsAsync(array $args = [])
 * @method Result listChannels(array $args = [])
 * @method Promise listChannelsAsync(array $args = [])
 * @method Result listChannelsModeratedByAppInstanceUser(array $args = [])
 * @method Promise listChannelsModeratedByAppInstanceUserAsync(array $args = [])
 * @method Result listMeetingTags(array $args = [])
 * @method Promise listMeetingTagsAsync(array $args = [])
 * @method Result listMeetings(array $args = [])
 * @method Promise listMeetingsAsync(array $args = [])
 * @method Result listPhoneNumberOrders(array $args = [])
 * @method Promise listPhoneNumberOrdersAsync(array $args = [])
 * @method Result listPhoneNumbers(array $args = [])
 * @method Promise listPhoneNumbersAsync(array $args = [])
 * @method Result listProxySessions(array $args = [])
 * @method Promise listProxySessionsAsync(array $args = [])
 * @method Result listRoomMemberships(array $args = [])
 * @method Promise listRoomMembershipsAsync(array $args = [])
 * @method Result listRooms(array $args = [])
 * @method Promise listRoomsAsync(array $args = [])
 * @method Result listSipMediaApplications(array $args = [])
 * @method Promise listSipMediaApplicationsAsync(array $args = [])
 * @method Result listSipRules(array $args = [])
 * @method Promise listSipRulesAsync(array $args = [])
 * @method Result listTagsForResource(array $args = [])
 * @method Promise listTagsForResourceAsync(array $args = [])
 * @method Result listUsers(array $args = [])
 * @method Promise listUsersAsync(array $args = [])
 * @method Result listVoiceConnectorGroups(array $args = [])
 * @method Promise listVoiceConnectorGroupsAsync(array $args = [])
 * @method Result listVoiceConnectorTerminationCredentials(array $args = [])
 * @method Promise listVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method Result listVoiceConnectors(array $args = [])
 * @method Promise listVoiceConnectorsAsync(array $args = [])
 * @method Result logoutUser(array $args = [])
 * @method Promise logoutUserAsync(array $args = [])
 * @method Result putAppInstanceRetentionSettings(array $args = [])
 * @method Promise putAppInstanceRetentionSettingsAsync(array $args = [])
 * @method Result putAppInstanceStreamingConfigurations(array $args = [])
 * @method Promise putAppInstanceStreamingConfigurationsAsync(array $args = [])
 * @method Result putEventsConfiguration(array $args = [])
 * @method Promise putEventsConfigurationAsync(array $args = [])
 * @method Result putRetentionSettings(array $args = [])
 * @method Promise putRetentionSettingsAsync(array $args = [])
 * @method Result putSipMediaApplicationLoggingConfiguration(array $args = [])
 * @method Promise putSipMediaApplicationLoggingConfigurationAsync(array $args = [])
 * @method Result putVoiceConnectorEmergencyCallingConfiguration(array $args = [])
 * @method Promise putVoiceConnectorEmergencyCallingConfigurationAsync(array $args = [])
 * @method Result putVoiceConnectorLoggingConfiguration(array $args = [])
 * @method Promise putVoiceConnectorLoggingConfigurationAsync(array $args = [])
 * @method Result putVoiceConnectorOrigination(array $args = [])
 * @method Promise putVoiceConnectorOriginationAsync(array $args = [])
 * @method Result putVoiceConnectorProxy(array $args = [])
 * @method Promise putVoiceConnectorProxyAsync(array $args = [])
 * @method Result putVoiceConnectorStreamingConfiguration(array $args = [])
 * @method Promise putVoiceConnectorStreamingConfigurationAsync(array $args = [])
 * @method Result putVoiceConnectorTermination(array $args = [])
 * @method Promise putVoiceConnectorTerminationAsync(array $args = [])
 * @method Result putVoiceConnectorTerminationCredentials(array $args = [])
 * @method Promise putVoiceConnectorTerminationCredentialsAsync(array $args = [])
 * @method Result redactChannelMessage(array $args = [])
 * @method Promise redactChannelMessageAsync(array $args = [])
 * @method Result redactConversationMessage(array $args = [])
 * @method Promise redactConversationMessageAsync(array $args = [])
 * @method Result redactRoomMessage(array $args = [])
 * @method Promise redactRoomMessageAsync(array $args = [])
 * @method Result regenerateSecurityToken(array $args = [])
 * @method Promise regenerateSecurityTokenAsync(array $args = [])
 * @method Result resetPersonalPIN(array $args = [])
 * @method Promise resetPersonalPINAsync(array $args = [])
 * @method Result restorePhoneNumber(array $args = [])
 * @method Promise restorePhoneNumberAsync(array $args = [])
 * @method Result searchAvailablePhoneNumbers(array $args = [])
 * @method Promise searchAvailablePhoneNumbersAsync(array $args = [])
 * @method Result sendChannelMessage(array $args = [])
 * @method Promise sendChannelMessageAsync(array $args = [])
 * @method Result tagAttendee(array $args = [])
 * @method Promise tagAttendeeAsync(array $args = [])
 * @method Result tagMeeting(array $args = [])
 * @method Promise tagMeetingAsync(array $args = [])
 * @method Result tagResource(array $args = [])
 * @method Promise tagResourceAsync(array $args = [])
 * @method Result untagAttendee(array $args = [])
 * @method Promise untagAttendeeAsync(array $args = [])
 * @method Result untagMeeting(array $args = [])
 * @method Promise untagMeetingAsync(array $args = [])
 * @method Result untagResource(array $args = [])
 * @method Promise untagResourceAsync(array $args = [])
 * @method Result updateAccount(array $args = [])
 * @method Promise updateAccountAsync(array $args = [])
 * @method Result updateAccountSettings(array $args = [])
 * @method Promise updateAccountSettingsAsync(array $args = [])
 * @method Result updateAppInstance(array $args = [])
 * @method Promise updateAppInstanceAsync(array $args = [])
 * @method Result updateAppInstanceUser(array $args = [])
 * @method Promise updateAppInstanceUserAsync(array $args = [])
 * @method Result updateBot(array $args = [])
 * @method Promise updateBotAsync(array $args = [])
 * @method Result updateChannel(array $args = [])
 * @method Promise updateChannelAsync(array $args = [])
 * @method Result updateChannelMessage(array $args = [])
 * @method Promise updateChannelMessageAsync(array $args = [])
 * @method Result updateChannelReadMarker(array $args = [])
 * @method Promise updateChannelReadMarkerAsync(array $args = [])
 * @method Result updateGlobalSettings(array $args = [])
 * @method Promise updateGlobalSettingsAsync(array $args = [])
 * @method Result updatePhoneNumber(array $args = [])
 * @method Promise updatePhoneNumberAsync(array $args = [])
 * @method Result updatePhoneNumberSettings(array $args = [])
 * @method Promise updatePhoneNumberSettingsAsync(array $args = [])
 * @method Result updateProxySession(array $args = [])
 * @method Promise updateProxySessionAsync(array $args = [])
 * @method Result updateRoom(array $args = [])
 * @method Promise updateRoomAsync(array $args = [])
 * @method Result updateRoomMembership(array $args = [])
 * @method Promise updateRoomMembershipAsync(array $args = [])
 * @method Result updateSipMediaApplication(array $args = [])
 * @method Promise updateSipMediaApplicationAsync(array $args = [])
 * @method Result updateSipRule(array $args = [])
 * @method Promise updateSipRuleAsync(array $args = [])
 * @method Result updateUser(array $args = [])
 * @method Promise updateUserAsync(array $args = [])
 * @method Result updateUserSettings(array $args = [])
 * @method Promise updateUserSettingsAsync(array $args = [])
 * @method Result updateVoiceConnector(array $args = [])
 * @method Promise updateVoiceConnectorAsync(array $args = [])
 * @method Result updateVoiceConnectorGroup(array $args = [])
 * @method Promise updateVoiceConnectorGroupAsync(array $args = [])
 */
class ChimeClient extends AwsClient {}