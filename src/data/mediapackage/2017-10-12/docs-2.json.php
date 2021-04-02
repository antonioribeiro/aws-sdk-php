<?php
// This file was auto-generated from sdk-root/src/data/mediapackage/2017-10-12/docs-2.json
return [ 'version' => '2.0', 'service' => 'AWS Elemental MediaPackage', 'operations' => [ 'ConfigureLogs' => 'Changes the Channel\'s properities to configure log subscription', 'CreateChannel' => 'Creates a new Channel.', 'CreateHarvestJob' => 'Creates a new HarvestJob record.', 'CreateOriginEndpoint' => 'Creates a new OriginEndpoint record.', 'DeleteChannel' => 'Deletes an existing Channel.', 'DeleteOriginEndpoint' => 'Deletes an existing OriginEndpoint.', 'DescribeChannel' => 'Gets details about a Channel.', 'DescribeHarvestJob' => 'Gets details about an existing HarvestJob.', 'DescribeOriginEndpoint' => 'Gets details about an existing OriginEndpoint.', 'ListChannels' => 'Returns a collection of Channels.', 'ListHarvestJobs' => 'Returns a collection of HarvestJob records.', 'ListOriginEndpoints' => 'Returns a collection of OriginEndpoint records.', 'ListTagsForResource' => NULL, 'RotateChannelCredentials' => 'Changes the Channel\'s first IngestEndpoint\'s username and password. WARNING - This API is deprecated. Please use RotateIngestEndpointCredentials instead', 'RotateIngestEndpointCredentials' => 'Rotate the IngestEndpoint\'s username and password, as specified by the IngestEndpoint\'s id.', 'TagResource' => NULL, 'UntagResource' => NULL, 'UpdateChannel' => 'Updates an existing Channel.', 'UpdateOriginEndpoint' => 'Updates an existing OriginEndpoint.', ], 'shapes' => [ 'AdMarkers' => [ 'base' => NULL, 'refs' => [ 'HlsManifest$AdMarkers' => 'This setting controls how ad markers are included in the packaged OriginEndpoint."NONE" will omit all SCTE-35 ad markers from the output."PASSTHROUGH" causes the manifest to contain a copy of the SCTE-35 admarkers (comments) taken directly from the input HTTP Live Streaming (HLS) manifest."SCTE35_ENHANCED" generates ad markers and blackout tags based on SCTE-35messages in the input source."DATERANGE" inserts EXT-X-DATERANGE tags to signal ad and program transition eventsin HLS and CMAF manifests. For this option, you must set a programDateTimeIntervalSeconds valuethat is greater than 0.', 'HlsManifestCreateOrUpdateParameters$AdMarkers' => 'This setting controls how ad markers are included in the packaged OriginEndpoint."NONE" will omit all SCTE-35 ad markers from the output."PASSTHROUGH" causes the manifest to contain a copy of the SCTE-35 admarkers (comments) taken directly from the input HTTP Live Streaming (HLS) manifest."SCTE35_ENHANCED" generates ad markers and blackout tags based on SCTE-35messages in the input source."DATERANGE" inserts EXT-X-DATERANGE tags to signal ad and program transition eventsin HLS and CMAF manifests. For this option, you must set a programDateTimeIntervalSeconds valuethat is greater than 0.', 'HlsPackage$AdMarkers' => 'This setting controls how ad markers are included in the packaged OriginEndpoint."NONE" will omit all SCTE-35 ad markers from the output."PASSTHROUGH" causes the manifest to contain a copy of the SCTE-35 admarkers (comments) taken directly from the input HTTP Live Streaming (HLS) manifest."SCTE35_ENHANCED" generates ad markers and blackout tags based on SCTE-35messages in the input source."DATERANGE" inserts EXT-X-DATERANGE tags to signal ad and program transition eventsin HLS and CMAF manifests. For this option, you must set a programDateTimeIntervalSeconds valuethat is greater than 0.', ], ], 'AdTriggers' => [ 'base' => 'A list of SCTE-35 message types that are treated as ad markers in the output. If empty, noad markers are output. Specify multiple items to create ad markers for all of the includedmessage types.', 'refs' => [ 'DashPackage$AdTriggers' => NULL, 'HlsManifestCreateOrUpdateParameters$AdTriggers' => NULL, 'HlsPackage$AdTriggers' => NULL, ], ], 'AdsOnDeliveryRestrictions' => [ 'base' => 'This setting allows the delivery restriction flags on SCTE-35 segmentation descriptors todetermine whether a message signals an ad. Choosing "NONE" means no SCTE-35 messages becomeads. Choosing "RESTRICTED" means SCTE-35 messages of the types specified in AdTriggers thatcontain delivery restrictions will be treated as ads. Choosing "UNRESTRICTED" means SCTE-35messages of the types specified in AdTriggers that do not contain delivery restrictions willbe treated as ads. Choosing "BOTH" means all SCTE-35 messages of the types specified inAdTriggers will be treated as ads. Note that Splice Insert messages do not have these flagsand are always treated as ads if specified in AdTriggers.', 'refs' => [ 'DashPackage$AdsOnDeliveryRestrictions' => NULL, 'HlsManifestCreateOrUpdateParameters$AdsOnDeliveryRestrictions' => NULL, 'HlsPackage$AdsOnDeliveryRestrictions' => NULL, ], ], 'Authorization' => [ 'base' => 'CDN Authorization credentials', 'refs' => [ 'OriginEndpoint$Authorization' => NULL, 'OriginEndpointCreateParameters$Authorization' => NULL, 'OriginEndpointUpdateParameters$Authorization' => NULL, ], ], 'Channel' => [ 'base' => 'A Channel resource configuration.', 'refs' => [ '__listOfChannel$member' => NULL, ], ], 'ChannelCreateParameters' => [ 'base' => 'Configuration parameters for a new Channel.', 'refs' => [], ], 'ChannelList' => [ 'base' => 'A collection of Channel records.', 'refs' => [], ], 'ChannelUpdateParameters' => [ 'base' => 'Configuration parameters for updating an existing Channel.', 'refs' => [], ], 'CmafEncryption' => [ 'base' => 'A Common Media Application Format (CMAF) encryption configuration.', 'refs' => [ 'CmafPackage$Encryption' => NULL, 'CmafPackageCreateOrUpdateParameters$Encryption' => NULL, ], ], 'CmafPackage' => [ 'base' => 'A Common Media Application Format (CMAF) packaging configuration.', 'refs' => [ 'OriginEndpoint$CmafPackage' => NULL, ], ], 'CmafPackageCreateOrUpdateParameters' => [ 'base' => 'A Common Media Application Format (CMAF) packaging configuration.', 'refs' => [ 'OriginEndpointCreateParameters$CmafPackage' => NULL, 'OriginEndpointUpdateParameters$CmafPackage' => NULL, ], ], 'ConfigureLogsParameters' => [ 'base' => 'The configuration parameters for ingress and egress access logging.', 'refs' => [], ], 'DashEncryption' => [ 'base' => 'A Dynamic Adaptive Streaming over HTTP (DASH) encryption configuration.', 'refs' => [ 'DashPackage$Encryption' => NULL, ], ], 'DashPackage' => [ 'base' => 'A Dynamic Adaptive Streaming over HTTP (DASH) packaging configuration.', 'refs' => [ 'OriginEndpoint$DashPackage' => NULL, 'OriginEndpointCreateParameters$DashPackage' => NULL, 'OriginEndpointUpdateParameters$DashPackage' => NULL, ], ], 'EgressAccessLogs' => [ 'base' => 'Configure egress access logging.', 'refs' => [ 'Channel$EgressAccessLogs' => NULL, 'ConfigureLogsParameters$EgressAccessLogs' => NULL, ], ], 'EncryptionContractConfiguration' => [ 'base' => 'Use encryptionContractConfiguration to configure one or more content encryption keys for your endpoints that use SPEKE 2.0.The encryption contract defines which content keys are used to encrypt the audio and video tracks in your stream.To configure the encryption contract, specify which audio and video encryption presets to use.Note the following considerations when using encryptionContractConfiguration:encryptionContractConfiguration can be used for DASH endpoints that use SPEKE 2.0. SPEKE 2.0 relies on the CPIX 2.3 specification.You must disable key rotation for this endpoint by setting keyRotationIntervalSeconds to 0.', 'refs' => [ 'SpekeKeyProvider$EncryptionContractConfiguration' => NULL, ], ], 'EncryptionMethod' => [ 'base' => NULL, 'refs' => [ 'HlsEncryption$EncryptionMethod' => 'The encryption method to use.', ], ], 'HarvestJob' => [ 'base' => 'A HarvestJob resource configuration', 'refs' => [ '__listOfHarvestJob$member' => NULL, ], ], 'HarvestJobCreateParameters' => [ 'base' => 'Configuration parameters for a new HarvestJob', 'refs' => [], ], 'HarvestJobList' => [ 'base' => 'A collection of HarvestJob records.', 'refs' => [], ], 'HlsEncryption' => [ 'base' => 'An HTTP Live Streaming (HLS) encryption configuration.', 'refs' => [ 'HlsPackage$Encryption' => NULL, ], ], 'HlsIngest' => [ 'base' => 'An HTTP Live Streaming (HLS) ingest resource configuration.', 'refs' => [ 'Channel$HlsIngest' => NULL, ], ], 'HlsManifest' => [ 'base' => 'A HTTP Live Streaming (HLS) manifest configuration.', 'refs' => [ '__listOfHlsManifest$member' => NULL, ], ], 'HlsManifestCreateOrUpdateParameters' => [ 'base' => 'A HTTP Live Streaming (HLS) manifest configuration.', 'refs' => [ '__listOfHlsManifestCreateOrUpdateParameters$member' => NULL, ], ], 'HlsPackage' => [ 'base' => 'An HTTP Live Streaming (HLS) packaging configuration.', 'refs' => [ 'OriginEndpoint$HlsPackage' => NULL, 'OriginEndpointCreateParameters$HlsPackage' => NULL, 'OriginEndpointUpdateParameters$HlsPackage' => NULL, ], ], 'IngestEndpoint' => [ 'base' => 'An endpoint for ingesting source content for a Channel.', 'refs' => [ '__listOfIngestEndpoint$member' => NULL, ], ], 'IngressAccessLogs' => [ 'base' => 'Configure ingress access logging.', 'refs' => [ 'Channel$IngressAccessLogs' => NULL, 'ConfigureLogsParameters$IngressAccessLogs' => NULL, ], ], 'ManifestLayout' => [ 'base' => NULL, 'refs' => [ 'DashPackage$ManifestLayout' => 'Determines the position of some tags in the Media Presentation Description (MPD). When set to FULL, elements like SegmentTemplate and ContentProtection are included in each Representation. When set to COMPACT, duplicate elements are combined and presented at the AdaptationSet level.', ], ], 'MssEncryption' => [ 'base' => 'A Microsoft Smooth Streaming (MSS) encryption configuration.', 'refs' => [ 'MssPackage$Encryption' => NULL, ], ], 'MssPackage' => [ 'base' => 'A Microsoft Smooth Streaming (MSS) packaging configuration.', 'refs' => [ 'OriginEndpoint$MssPackage' => NULL, 'OriginEndpointCreateParameters$MssPackage' => NULL, 'OriginEndpointUpdateParameters$MssPackage' => NULL, ], ], 'OriginEndpoint' => [ 'base' => 'An OriginEndpoint resource configuration.', 'refs' => [ '__listOfOriginEndpoint$member' => NULL, ], ], 'OriginEndpointCreateParameters' => [ 'base' => 'Configuration parameters for a new OriginEndpoint.', 'refs' => [], ], 'OriginEndpointList' => [ 'base' => 'A collection of OriginEndpoint records.', 'refs' => [], ], 'OriginEndpointUpdateParameters' => [ 'base' => 'Configuration parameters for updating an existing OriginEndpoint.', 'refs' => [], ], 'Origination' => [ 'base' => NULL, 'refs' => [ 'OriginEndpoint$Origination' => 'Control whether origination of video is allowed for this OriginEndpoint. If set to ALLOW, the OriginEndpointmay by requested, pursuant to any other form of access control. If set to DENY, the OriginEndpoint may not berequested. This can be helpful for Live to VOD harvesting, or for temporarily disabling origination', 'OriginEndpointCreateParameters$Origination' => 'Control whether origination of video is allowed for this OriginEndpoint. If set to ALLOW, the OriginEndpointmay by requested, pursuant to any other form of access control. If set to DENY, the OriginEndpoint may not berequested. This can be helpful for Live to VOD harvesting, or for temporarily disabling origination', 'OriginEndpointUpdateParameters$Origination' => 'Control whether origination of video is allowed for this OriginEndpoint. If set to ALLOW, the OriginEndpointmay by requested, pursuant to any other form of access control. If set to DENY, the OriginEndpoint may not berequested. This can be helpful for Live to VOD harvesting, or for temporarily disabling origination', ], ], 'PlaylistType' => [ 'base' => NULL, 'refs' => [ 'HlsManifest$PlaylistType' => 'The HTTP Live Streaming (HLS) playlist type.When either "EVENT" or "VOD" is specified, a corresponding EXT-X-PLAYLIST-TYPEentry will be included in the media playlist.', 'HlsManifestCreateOrUpdateParameters$PlaylistType' => 'The HTTP Live Streaming (HLS) playlist type.When either "EVENT" or "VOD" is specified, a corresponding EXT-X-PLAYLIST-TYPEentry will be included in the media playlist.', 'HlsPackage$PlaylistType' => 'The HTTP Live Streaming (HLS) playlist type.When either "EVENT" or "VOD" is specified, a corresponding EXT-X-PLAYLIST-TYPEentry will be included in the media playlist.', ], ], 'PresetSpeke20Audio' => [ 'base' => NULL, 'refs' => [ 'EncryptionContractConfiguration$PresetSpeke20Audio' => 'A collection of audio encryption presets.', ], ], 'PresetSpeke20Video' => [ 'base' => NULL, 'refs' => [ 'EncryptionContractConfiguration$PresetSpeke20Video' => 'A collection of video encryption presets.', ], ], 'Profile' => [ 'base' => NULL, 'refs' => [ 'DashPackage$Profile' => 'The Dynamic Adaptive Streaming over HTTP (DASH) profile type. When set to "HBBTV_1_5", HbbTV 1.5 compliant output is enabled.', ], ], 'S3Destination' => [ 'base' => 'Configuration parameters for where in an S3 bucket to place the harvested content', 'refs' => [ 'HarvestJob$S3Destination' => NULL, 'HarvestJobCreateParameters$S3Destination' => NULL, ], ], 'SegmentTemplateFormat' => [ 'base' => NULL, 'refs' => [ 'DashPackage$SegmentTemplateFormat' => 'Determines the type of SegmentTemplate included in the Media Presentation Description (MPD). When set to NUMBER_WITH_TIMELINE, a full timeline is presented in each SegmentTemplate, with $Number$ media URLs. When set to TIME_WITH_TIMELINE, a full timeline is presented in each SegmentTemplate, with $Time$ media URLs. When set to NUMBER_WITH_DURATION, only a duration is included in each SegmentTemplate, with $Number$ media URLs.', ], ], 'SpekeKeyProvider' => [ 'base' => 'A configuration for accessing an external Secure Packager and Encoder Key Exchange (SPEKE) service that will provide encryption keys.', 'refs' => [ 'CmafEncryption$SpekeKeyProvider' => NULL, 'DashEncryption$SpekeKeyProvider' => NULL, 'HlsEncryption$SpekeKeyProvider' => NULL, 'MssEncryption$SpekeKeyProvider' => NULL, ], ], 'Status' => [ 'base' => NULL, 'refs' => [ 'HarvestJob$Status' => 'The current status of the HarvestJob. Consider setting up a CloudWatch Event to listen forHarvestJobs as they succeed or fail. In the event of failure, the CloudWatch Event willinclude an explanation of why the HarvestJob failed.', ], ], 'StreamOrder' => [ 'base' => NULL, 'refs' => [ 'StreamSelection$StreamOrder' => 'A directive that determines the order of streams in the output.', ], ], 'StreamSelection' => [ 'base' => 'A StreamSelection configuration.', 'refs' => [ 'CmafPackage$StreamSelection' => NULL, 'CmafPackageCreateOrUpdateParameters$StreamSelection' => NULL, 'DashPackage$StreamSelection' => NULL, 'HlsPackage$StreamSelection' => NULL, 'MssPackage$StreamSelection' => NULL, ], ], 'Tags' => [ 'base' => 'A collection of tags associated with a resource', 'refs' => [ 'Channel$Tags' => NULL, 'ChannelCreateParameters$Tags' => NULL, 'OriginEndpoint$Tags' => NULL, 'OriginEndpointCreateParameters$Tags' => NULL, ], ], 'TagsModel' => [ 'base' => NULL, 'refs' => [], ], 'UtcTiming' => [ 'base' => NULL, 'refs' => [ 'DashPackage$UtcTiming' => 'Determines the type of UTCTiming included in the Media Presentation Description (MPD)', ], ], '__AdTriggersElement' => [ 'base' => NULL, 'refs' => [ 'AdTriggers$member' => NULL, ], ], '__PeriodTriggersElement' => [ 'base' => NULL, 'refs' => [ '__listOf__PeriodTriggersElement$member' => NULL, ], ], '__boolean' => [ 'base' => NULL, 'refs' => [ 'HlsEncryption$RepeatExtXKey' => 'When enabled, the EXT-X-KEY tag will be repeated in output manifests.', 'HlsManifest$IncludeIframeOnlyStream' => 'When enabled, an I-Frame only stream will be included in the output.', 'HlsManifestCreateOrUpdateParameters$IncludeIframeOnlyStream' => 'When enabled, an I-Frame only stream will be included in the output.', 'HlsPackage$IncludeIframeOnlyStream' => 'When enabled, an I-Frame only stream will be included in the output.', 'HlsPackage$UseAudioRenditionGroup' => 'When enabled, audio streams will be placed in rendition groups in the output.', ], ], '__integer' => [ 'base' => NULL, 'refs' => [ 'CmafEncryption$KeyRotationIntervalSeconds' => 'Time (in seconds) between each encryption key rotation.', 'CmafPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each segment. Actual segments will berounded to the nearest multiple of the source segment duration.', 'CmafPackageCreateOrUpdateParameters$SegmentDurationSeconds' => 'Duration (in seconds) of each segment. Actual segments will berounded to the nearest multiple of the source segment duration.', 'DashEncryption$KeyRotationIntervalSeconds' => 'Time (in seconds) between each encryption key rotation.', 'DashPackage$ManifestWindowSeconds' => 'Time window (in seconds) contained in each manifest.', 'DashPackage$MinBufferTimeSeconds' => 'Minimum duration (in seconds) that a player will buffer media before starting the presentation.', 'DashPackage$MinUpdatePeriodSeconds' => 'Minimum duration (in seconds) between potential changes to the Dynamic Adaptive Streaming over HTTP (DASH) Media Presentation Description (MPD).', 'DashPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each segment. Actual segments will berounded to the nearest multiple of the source segment duration.', 'DashPackage$SuggestedPresentationDelaySeconds' => 'Duration (in seconds) to delay live content before presentation.', 'HlsEncryption$KeyRotationIntervalSeconds' => 'Interval (in seconds) between each encryption key rotation.', 'HlsManifest$PlaylistWindowSeconds' => 'Time window (in seconds) contained in each parent manifest.', 'HlsManifest$ProgramDateTimeIntervalSeconds' => 'The interval (in seconds) between each EXT-X-PROGRAM-DATE-TIME taginserted into manifests. Additionally, when an interval is specifiedID3Timed Metadata messages will be generated every 5 seconds using theingest time of the content.If the interval is not specified, or set to 0, thenno EXT-X-PROGRAM-DATE-TIME tags will be inserted into manifests and noID3Timed Metadata messages will be generated. Note that irrespectiveof this parameter, if any ID3 Timed Metadata is found in HTTP Live Streaming (HLS) input,it will be passed through to HLS output.', 'HlsManifestCreateOrUpdateParameters$PlaylistWindowSeconds' => 'Time window (in seconds) contained in each parent manifest.', 'HlsManifestCreateOrUpdateParameters$ProgramDateTimeIntervalSeconds' => 'The interval (in seconds) between each EXT-X-PROGRAM-DATE-TIME taginserted into manifests. Additionally, when an interval is specifiedID3Timed Metadata messages will be generated every 5 seconds using theingest time of the content.If the interval is not specified, or set to 0, thenno EXT-X-PROGRAM-DATE-TIME tags will be inserted into manifests and noID3Timed Metadata messages will be generated. Note that irrespectiveof this parameter, if any ID3 Timed Metadata is found in HTTP Live Streaming (HLS) input,it will be passed through to HLS output.', 'HlsPackage$PlaylistWindowSeconds' => 'Time window (in seconds) contained in each parent manifest.', 'HlsPackage$ProgramDateTimeIntervalSeconds' => 'The interval (in seconds) between each EXT-X-PROGRAM-DATE-TIME taginserted into manifests. Additionally, when an interval is specifiedID3Timed Metadata messages will be generated every 5 seconds using theingest time of the content.If the interval is not specified, or set to 0, thenno EXT-X-PROGRAM-DATE-TIME tags will be inserted into manifests and noID3Timed Metadata messages will be generated. Note that irrespectiveof this parameter, if any ID3 Timed Metadata is found in HTTP Live Streaming (HLS) input,it will be passed through to HLS output.', 'HlsPackage$SegmentDurationSeconds' => 'Duration (in seconds) of each fragment. Actual fragments will berounded to the nearest multiple of the source fragment duration.', 'MssPackage$ManifestWindowSeconds' => 'The time window (in seconds) contained in each manifest.', 'MssPackage$SegmentDurationSeconds' => 'The duration (in seconds) of each segment.', 'OriginEndpoint$StartoverWindowSeconds' => 'Maximum duration (seconds) of content to retain for startover playback.If not specified, startover playback will be disabled for the OriginEndpoint.', 'OriginEndpoint$TimeDelaySeconds' => 'Amount of delay (seconds) to enforce on the playback of live content.If not specified, there will be no time delay in effect for the OriginEndpoint.', 'OriginEndpointCreateParameters$StartoverWindowSeconds' => 'Maximum duration (seconds) of content to retain for startover playback.If not specified, startover playback will be disabled for the OriginEndpoint.', 'OriginEndpointCreateParameters$TimeDelaySeconds' => 'Amount of delay (seconds) to enforce on the playback of live content.If not specified, there will be no time delay in effect for the OriginEndpoint.', 'OriginEndpointUpdateParameters$StartoverWindowSeconds' => 'Maximum duration (in seconds) of content to retain for startover playback.If not specified, startover playback will be disabled for the OriginEndpoint.', 'OriginEndpointUpdateParameters$TimeDelaySeconds' => 'Amount of delay (in seconds) to enforce on the playback of live content.If not specified, there will be no time delay in effect for the OriginEndpoint.', 'StreamSelection$MaxVideoBitsPerSecond' => 'The maximum video bitrate (bps) to include in output.', 'StreamSelection$MinVideoBitsPerSecond' => 'The minimum video bitrate (bps) to include in output.', ], ], '__listOfChannel' => [ 'base' => NULL, 'refs' => [ 'ChannelList$Channels' => 'A list of Channel records.', ], ], '__listOfHarvestJob' => [ 'base' => NULL, 'refs' => [ 'HarvestJobList$HarvestJobs' => 'A list of HarvestJob records.', ], ], '__listOfHlsManifest' => [ 'base' => NULL, 'refs' => [ 'CmafPackage$HlsManifests' => 'A list of HLS manifest configurations', ], ], '__listOfHlsManifestCreateOrUpdateParameters' => [ 'base' => NULL, 'refs' => [ 'CmafPackageCreateOrUpdateParameters$HlsManifests' => 'A list of HLS manifest configurations', ], ], '__listOfIngestEndpoint' => [ 'base' => NULL, 'refs' => [ 'HlsIngest$IngestEndpoints' => 'A list of endpoints to which the source stream should be sent.', ], ], '__listOfOriginEndpoint' => [ 'base' => NULL, 'refs' => [ 'OriginEndpointList$OriginEndpoints' => 'A list of OriginEndpoint records.', ], ], '__listOf__PeriodTriggersElement' => [ 'base' => NULL, 'refs' => [ 'DashPackage$PeriodTriggers' => 'A list of triggers that controls when the outgoing Dynamic Adaptive Streaming over HTTP (DASH)Media Presentation Description (MPD) will be partitioned into multiple periods. If empty, the content will notbe partitioned into more than one period. If the list contains "ADS", new periods will be created wherethe Channel source contains SCTE-35 ad markers.', ], ], '__listOf__string' => [ 'base' => NULL, 'refs' => [ 'OriginEndpoint$Whitelist' => 'A list of source IP CIDR blocks that will be allowed to access the OriginEndpoint.', 'OriginEndpointCreateParameters$Whitelist' => 'A list of source IP CIDR blocks that will be allowed to access the OriginEndpoint.', 'OriginEndpointUpdateParameters$Whitelist' => 'A list of source IP CIDR blocks that will be allowed to access the OriginEndpoint.', 'SpekeKeyProvider$SystemIds' => 'The system IDs to include in key requests.', ], ], '__mapOf__string' => [ 'base' => NULL, 'refs' => [ 'TagsModel$Tags' => NULL, ], ], '__string' => [ 'base' => NULL, 'refs' => [ 'Authorization$CdnIdentifierSecret' => 'The Amazon Resource Name (ARN) for the secret in Secrets Manager that your Content Distribution Network (CDN) uses for authorization to access your endpoint.', 'Authorization$SecretsRoleArn' => 'The Amazon Resource Name (ARN) for the IAM role that allows MediaPackage to communicate with AWS Secrets Manager.', 'Channel$Arn' => 'The Amazon Resource Name (ARN) assigned to the Channel.', 'Channel$Description' => 'A short text description of the Channel.', 'Channel$Id' => 'The ID of the Channel.', 'ChannelCreateParameters$Description' => 'A short text description of the Channel.', 'ChannelCreateParameters$Id' => 'The ID of the Channel. The ID must be unique within the region and itcannot be changed after a Channel is created.', 'ChannelList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'ChannelUpdateParameters$Description' => 'A short text description of the Channel.', 'CmafPackage$SegmentPrefix' => 'An optional custom string that is prepended to the name of each segment. If not specified, it defaults to the ChannelId.', 'CmafPackageCreateOrUpdateParameters$SegmentPrefix' => 'An optional custom string that is prepended to the name of each segment. If not specified, it defaults to the ChannelId.', 'DashPackage$UtcTimingUri' => 'Specifies the value attribute of the UTCTiming field when utcTiming is set to HTTP-ISO or HTTP-HEAD', 'EgressAccessLogs$LogGroupName' => 'Customize the log group name.', 'HarvestJob$Arn' => 'The Amazon Resource Name (ARN) assigned to the HarvestJob.', 'HarvestJob$ChannelId' => 'The ID of the Channel that the HarvestJob will harvest from.', 'HarvestJob$CreatedAt' => 'The time the HarvestJob was submitted', 'HarvestJob$EndTime' => 'The end of the time-window which will be harvested.', 'HarvestJob$Id' => 'The ID of the HarvestJob. The ID must be unique within the regionand it cannot be changed after the HarvestJob is submitted.', 'HarvestJob$OriginEndpointId' => 'The ID of the OriginEndpoint that the HarvestJob will harvest from.This cannot be changed after the HarvestJob is submitted.', 'HarvestJob$StartTime' => 'The start of the time-window which will be harvested.', 'HarvestJobCreateParameters$EndTime' => 'The end of the time-window which will be harvested', 'HarvestJobCreateParameters$Id' => 'The ID of the HarvestJob. The ID must be unique within the regionand it cannot be changed after the HarvestJob is submitted', 'HarvestJobCreateParameters$OriginEndpointId' => 'The ID of the OriginEndpoint that the HarvestJob will harvest from.This cannot be changed after the HarvestJob is submitted.', 'HarvestJobCreateParameters$StartTime' => 'The start of the time-window which will be harvested', 'HarvestJobList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'HlsEncryption$ConstantInitializationVector' => 'A constant initialization vector for encryption (optional).When not specified the initialization vector will be periodically rotated.', 'HlsManifest$Id' => 'The ID of the manifest. The ID must be unique within the OriginEndpoint and it cannot be changed after it is created.', 'HlsManifest$ManifestName' => 'An optional short string appended to the end of the OriginEndpoint URL. If not specified, defaults to the manifestName for the OriginEndpoint.', 'HlsManifest$Url' => 'The URL of the packaged OriginEndpoint for consumption.', 'HlsManifestCreateOrUpdateParameters$Id' => 'The ID of the manifest. The ID must be unique within the OriginEndpoint and it cannot be changed after it is created.', 'HlsManifestCreateOrUpdateParameters$ManifestName' => 'An optional short string appended to the end of the OriginEndpoint URL. If not specified, defaults to the manifestName for the OriginEndpoint.', 'IngestEndpoint$Id' => 'The system generated unique identifier for the IngestEndpoint', 'IngestEndpoint$Password' => 'The system generated password for ingest authentication.', 'IngestEndpoint$Url' => 'The ingest URL to which the source stream should be sent.', 'IngestEndpoint$Username' => 'The system generated username for ingest authentication.', 'IngressAccessLogs$LogGroupName' => 'Customize the log group name.', 'OriginEndpoint$Arn' => 'The Amazon Resource Name (ARN) assigned to the OriginEndpoint.', 'OriginEndpoint$ChannelId' => 'The ID of the Channel the OriginEndpoint is associated with.', 'OriginEndpoint$Description' => 'A short text description of the OriginEndpoint.', 'OriginEndpoint$Id' => 'The ID of the OriginEndpoint.', 'OriginEndpoint$ManifestName' => 'A short string appended to the end of the OriginEndpoint URL.', 'OriginEndpoint$Url' => 'The URL of the packaged OriginEndpoint for consumption.', 'OriginEndpointCreateParameters$ChannelId' => 'The ID of the Channel that the OriginEndpoint will be associated with.This cannot be changed after the OriginEndpoint is created.', 'OriginEndpointCreateParameters$Description' => 'A short text description of the OriginEndpoint.', 'OriginEndpointCreateParameters$Id' => 'The ID of the OriginEndpoint. The ID must be unique within the regionand it cannot be changed after the OriginEndpoint is created.', 'OriginEndpointCreateParameters$ManifestName' => 'A short string that will be used as the filename of the OriginEndpoint URL (defaults to "index").', 'OriginEndpointList$NextToken' => 'A token that can be used to resume pagination from the end of the collection.', 'OriginEndpointUpdateParameters$Description' => 'A short text description of the OriginEndpoint.', 'OriginEndpointUpdateParameters$ManifestName' => 'A short string that will be appended to the end of the Endpoint URL.', 'S3Destination$BucketName' => 'The name of an S3 bucket within which harvested content will be exported', 'S3Destination$ManifestKey' => 'The key in the specified S3 bucket where the harvested top-level manifest will be placed.', 'S3Destination$RoleArn' => 'The IAM role used to write to the specified S3 bucket', 'SpekeKeyProvider$CertificateArn' => 'An Amazon Resource Name (ARN) of a Certificate Manager certificatethat MediaPackage will use for enforcing secure end-to-end datatransfer with the key provider service.', 'SpekeKeyProvider$ResourceId' => 'The resource ID to include in key requests.', 'SpekeKeyProvider$RoleArn' => 'An Amazon Resource Name (ARN) of an IAM role that AWS ElementalMediaPackage will assume when accessing the key provider service.', 'SpekeKeyProvider$Url' => 'The URL of the external key provider service.', 'Tags$member' => NULL, '__listOf__string$member' => NULL, '__mapOf__string$member' => NULL, ], ], ],];
