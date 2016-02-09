<?php
// This file was auto-generated from sdk-root/src/data/streams.dynamodb/2012-08-10/docs-2.json
return [ 'version' => '2.0', 'operations' => [ 'DescribeStream' => '<p>Returns information about a stream, including the current status of the stream, its Amazon Resource Name (ARN], the composition of its shards, and its corresponding DynamoDB table.</p> <note><p>You can call <i>DescribeStream</i> at a maximum rate of 10 times per second.</p></note> <p>Each shard in the stream has a <code>SequenceNumberRange</code> associated with it. If the <code>SequenceNumberRange</code> has a <code>StartingSequenceNumber</code> but no <code>EndingSequenceNumber</code>, then the shard is still open (able to receive more stream records]. If both <code>StartingSequenceNumber</code> and <code>EndingSequenceNumber</code> are present, the that shared is closed and can no longer receive more data.</p>', 'GetRecords' => '<p>Retrieves the stream records from a given shard.</p> <p>Specify a shard iterator using the <code>ShardIterator</code> parameter. The shard iterator specifies the position in the shard from which you want to start reading stream records sequentially. If there are no stream records available in the portion of the shard that the iterator points to, <code>GetRecords</code> returns an empty list. Note that it might take multiple calls to get to a portion of the shard that contains stream records.</p> <note><p><function>GetRecords</function> can retrieve a maximum of 1 MB of data or 2000 stream records, whichever comes first.</p></note>', 'GetShardIterator' => '<p>Returns a shard iterator. A shard iterator provides information about how to retrieve the stream records from within a shard. Use the shard iterator in a subsequent <code>GetRecords</code> request to read the stream records from the shard.</p> <note><p>A shard iterator expires 15 minutes after it is returned to the requester.</p></note>', 'ListStreams' => '<p>Returns an array of stream ARNs associated with the current account and endpoint. If the <code>TableName</code> parameter is present, then <i>ListStreams</i> will return only the streams ARNs for that table.</p> <note><p>You can call <i>ListStreams</i> at a maximum rate of 5 times per second.</p></note>', ], 'shapes' => [ 'AttributeMap' => [ 'refs' => [ 'StreamRecord$Keys' => '<p>The primary key attribute(s] for the DynamoDB item that was modified.</p>', 'StreamRecord$NewImage' => '<p>The item in the DynamoDB table as it appeared after it was modified.</p>', 'StreamRecord$OldImage' => '<p>The item in the DynamoDB table as it appeared before it was modified.</p>', ], ], 'AttributeName' => [ 'refs' => [], ], 'AttributeValue' => [ 'base' => '<p>Represents the data for an attribute. You can set one, and only one, of the elements.</p> <p>Each attribute in an item is a name-value pair. An attribute can be single-valued or multi-valued set. For example, a book item can have title and authors attributes. Each book has one title but can have many authors. The multi-valued attribute is a set; duplicate values are not allowed. </p>', 'refs' => [], ], 'BinaryAttributeValue' => [ 'refs' => [ 'AttributeValue$B' => '<p>A Binary data type.</p>', ], ], 'BinarySetAttributeValue' => [ 'refs' => [ 'AttributeValue$BS' => '<p>A Binary Set data type.</p>', ], ], 'BooleanAttributeValue' => [ 'refs' => [ 'AttributeValue$BOOL' => '<p> A Boolean data type.</p>', ], ], 'Date' => [ 'refs' => [ 'StreamDescription$CreationRequestDateTime' => '<p>The date and time when the request to create this stream was issued.</p>', ], ], 'DescribeStreamInput' => [ 'base' => '<p>Represents the input of a <i>DescribeStream</i> operation.</p>', 'refs' => [], ], 'DescribeStreamOutput' => [ 'base' => '<p>Represents the output of a <i>DescribeStream</i> operation.</p>', 'refs' => [], ], 'ErrorMessage' => [ 'refs' => [ 'ExpiredIteratorException$message' => '<p>The provided iterator exceeds the maximum age allowed.</p>', 'InternalServerError$message' => '<p>The server encountered an internal error trying to fulfill the request.</p>', 'LimitExceededException$message' => '<p>Too many operations for a given subscriber.</p>', 'ResourceNotFoundException$message' => '<p>The resource which is being requested does not exist.</p>', 'TrimmedDataAccessException$message' => '<p>"The data you are trying to access has been trimmed.</p>', ], ], 'ExpiredIteratorException' => [ 'base' => '<p>The shard iterator has expired and can no longer be used to retrieve stream records. A shard iterator expires 15 minutes after it is retrieved using the <i>GetShardIterator</i> action.</p>', 'refs' => [], ], 'GetRecordsInput' => [ 'base' => '<p>Represents the input of a <i>GetRecords</i> operation.</p>', 'refs' => [], ], 'GetRecordsOutput' => [ 'base' => '<p>Represents the output of a <i>GetRecords</i> operation.</p>', 'refs' => [], ], 'GetShardIteratorInput' => [ 'base' => '<p>Represents the input of a <i>GetShardIterator</i> operation.</p>', 'refs' => [], ], 'GetShardIteratorOutput' => [ 'base' => '<p>Represents the output of a <i>GetShardIterator</i> operation.</p>', 'refs' => [], ], 'InternalServerError' => [ 'base' => '<p>An error occurred on the server side.</p>', 'refs' => [], ], 'KeySchema' => [ 'refs' => [ 'StreamDescription$KeySchema' => '<p>The key attribute(s] of the stream\'s DynamoDB table.</p>', ], ], 'KeySchemaAttributeName' => [ 'refs' => [ 'KeySchemaElement$AttributeName' => '<p>The name of a key attribute.</p>', ], ], 'KeySchemaElement' => [ 'base' => '<p>Represents <i>a single element</i> of a key schema. A key schema specifies the attributes that make up the primary key of a table, or the key attributes of an index.</p> <p>A <i>KeySchemaElement</i> represents exactly one attribute of the primary key. For example, a hash type primary key would be represented by one <i>KeySchemaElement</i>. A hash-and-range type primary key would require one <i>KeySchemaElement</i> for the hash attribute, and another <i>KeySchemaElement</i> for the range attribute.</p>', 'refs' => [], ], 'KeyType' => [ 'refs' => [ 'KeySchemaElement$KeyType' => '<p>The attribute data, consisting of the data type and the attribute value itself.</p>', ], ], 'LimitExceededException' => [ 'base' => '<p>Your request rate is too high. The AWS SDKs for DynamoDB automatically retry requests that receive this exception. Your request is eventually successful, unless your retry queue is too large to finish. Reduce the frequency of requests and use exponential backoff. For more information, go to <a href="http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/ErrorHandling.html#APIRetries">Error Retries and Exponential Backoff</a> in the <i>Amazon DynamoDB Developer Guide</i>.</p>', 'refs' => [], ], 'ListAttributeValue' => [ 'refs' => [ 'AttributeValue$L' => '<p>A List data type.</p>', ], ], 'ListStreamsInput' => [ 'base' => '<p>Represents the input of a <i>ListStreams</i> operation.</p>', 'refs' => [], ], 'ListStreamsOutput' => [ 'base' => '<p>Represents the output of a <i>ListStreams</i> operation.</p>', 'refs' => [], ], 'MapAttributeValue' => [ 'refs' => [ 'AttributeValue$M' => '<p>A Map data type.</p>', ], ], 'NullAttributeValue' => [ 'refs' => [ 'AttributeValue$NULL' => '<p>A Null data type.</p>', ], ], 'NumberAttributeValue' => [ 'refs' => [ 'AttributeValue$N' => '<p>A Number data type.</p>', ], ], 'NumberSetAttributeValue' => [ 'refs' => [ 'AttributeValue$NS' => '<p>A Number Set data type.</p>', ], ], 'OperationType' => [ 'refs' => [ 'Record$eventName' => '<p>The type of data modification that was performed on the DynamoDB table:</p> <ul> <li><p><code>INSERT</code> - a new item was added to the table.</p></li> <li><p><code>MODIFY</code> - one or more of the item\'s attributes were updated.</p></li> <li><p><code>REMOVE</code> - the item was deleted from the table</p></li> </ul>', ], ], 'PositiveIntegerObject' => [ 'refs' => [ 'DescribeStreamInput$Limit' => '<p>The maximum number of shard objects to return. The upper limit is 100.</p>', 'GetRecordsInput$Limit' => '<p>The maximum number of records to return from the shard. The upper limit is 1000.</p>', 'ListStreamsInput$Limit' => '<p>The maximum number of streams to return. The upper limit is 100.</p>', ], ], 'PositiveLongObject' => [ 'refs' => [ 'StreamRecord$SizeBytes' => '<p>The size of the stream record, in bytes.</p>', ], ], 'Record' => [ 'base' => '<p>A description of a unique event within a stream.</p>', 'refs' => [], ], 'RecordList' => [ 'refs' => [ 'GetRecordsOutput$Records' => '<p>The stream records from the shard, which were retrieved using the shard iterator.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The operation tried to access a nonexistent stream. </p>', 'refs' => [], ], 'SequenceNumber' => [ 'refs' => [ 'GetShardIteratorInput$SequenceNumber' => '<p>The sequence number of a stream record in the shard from which to start reading.</p>', 'SequenceNumberRange$EndingSequenceNumber' => '<p>The last sequence number.</p>', 'SequenceNumberRange$StartingSequenceNumber' => '<p>The first sequence number.</p>', 'StreamRecord$SequenceNumber' => '<p>The sequence number of the stream record.</p>', ], ], 'SequenceNumberRange' => [ 'base' => '<p>The beginning and ending sequence numbers for the stream records contained within a shard.</p>', 'refs' => [ 'Shard$SequenceNumberRange' => '<p>The range of possible sequence numbers for the shard.</p>', ], ], 'Shard' => [ 'base' => '<p>A uniquely identified group of stream records within a stream.</p>', 'refs' => [], ], 'ShardDescriptionList' => [ 'refs' => [ 'StreamDescription$Shards' => '<p>The shards that comprise the stream.</p>', ], ], 'ShardId' => [ 'refs' => [ 'DescribeStreamInput$ExclusiveStartShardId' => '<p>The shard ID of the first item that this operation will evaluate. Use the value that was returned for <code>LastEvaluatedShardId</code> in the previous operation. </p>', 'GetShardIteratorInput$ShardId' => '<p>The identifier of the shard. The iterator will be returned for this shard ID.</p>', 'Shard$ParentShardId' => '<p>The shard ID of the current shard\'s parent.</p>', 'Shard$ShardId' => '<p>The system-generated identifier for this shard.</p>', 'StreamDescription$LastEvaluatedShardId' => '<p>The shard ID of the item where the operation stopped, inclusive of the previous result set. Use this value to start a new operation, excluding this value in the new request.</p> <p>If <code>LastEvaluatedShardId</code> is empty, then the "last page" of results has been processed and there is currently no more data to be retrieved.</p> <p>If <code>LastEvaluatedShardId</code> is not empty, it does not necessarily mean that there is more data in the result set. The only way to know when you have reached the end of the result set is when <code>LastEvaluatedShardId</code> is empty.</p>', ], ], 'ShardIterator' => [ 'refs' => [ 'GetRecordsInput$ShardIterator' => '<p>A shard iterator that was retrieved from a previous GetShardIterator operation. This iterator can be used to access the stream records in this shard.</p>', 'GetRecordsOutput$NextShardIterator' => '<p>The next position in the shard from which to start sequentially reading stream records. If set to <code>null</code>, the shard has been closed and the requested iterator will not return any more data.</p>', 'GetShardIteratorOutput$ShardIterator' => '<p>The position in the shard from which to start reading stream records sequentially. A shard iterator specifies this position using the sequence number of a stream record in a shard.</p>', ], ], 'ShardIteratorType' => [ 'refs' => [ 'GetShardIteratorInput$ShardIteratorType' => '<p>Determines how the shard iterator is used to start reading stream records from the shard:</p> <ul> <li> <p><code>AT_SEQUENCE_NUMBER</code> - Start reading exactly from the position denoted by a specific sequence number.</p> </li> <li> <p><code>AFTER_SEQUENCE_NUMBER</code> - Start reading right after the position denoted by a specific sequence number.</p> </li> <li> <p><code>TRIM_HORIZON</code> - Start reading at the last (untrimmed] stream record, which is the oldest record in the shard. In DynamoDB Streams, there is a 24 hour limit on data retention. Stream records whose age exceeds this limit are subject to removal (trimming] from the stream.</p> </li> <li> <p><code>LATEST</code> - Start reading just after the most recent stream record in the shard, so that you always read the most recent data in the shard.</p> </li> </ul>', ], ], 'Stream' => [ 'base' => '<p>Represents all of the data describing a particular stream.</p>', 'refs' => [], ], 'StreamArn' => [ 'refs' => [ 'DescribeStreamInput$StreamArn' => '<p>The Amazon Resource Name (ARN] for the stream.</p>', 'GetShardIteratorInput$StreamArn' => '<p>The Amazon Resource Name (ARN] for the stream.</p>', 'ListStreamsInput$ExclusiveStartStreamArn' => '<p>The ARN (Amazon Resource Name] of the first item that this operation will evaluate. Use the value that was returned for <code>LastEvaluatedStreamArn</code> in the previous operation. </p>', 'ListStreamsOutput$LastEvaluatedStreamArn' => '<p>The stream ARN of the item where the operation stopped, inclusive of the previous result set. Use this value to start a new operation, excluding this value in the new request.</p> <p>If <code>LastEvaluatedStreamArn</code> is empty, then the "last page" of results has been processed and there is no more data to be retrieved.</p> <p>If <code>LastEvaluatedStreamArn</code> is not empty, it does not necessarily mean that there is more data in the result set. The only way to know when you have reached the end of the result set is when <code>LastEvaluatedStreamArn</code> is empty.</p>', 'Stream$StreamArn' => '<p>The Amazon Resource Name (ARN] for the stream.</p>', 'StreamDescription$StreamArn' => '<p>The Amazon Resource Name (ARN] for the stream.</p>', ], ], 'StreamDescription' => [ 'base' => '<p>Represents all of the data describing a particular stream.</p>', 'refs' => [ 'DescribeStreamOutput$StreamDescription' => '<p>A complete description of the stream, including its creation date and time, the DynamoDB table associated with the stream, the shard IDs within the stream, and the beginning and ending sequence numbers of stream records within the shards.</p>', ], ], 'StreamList' => [ 'refs' => [ 'ListStreamsOutput$Streams' => '<p>A list of stream descriptors associated with the current account and endpoint.</p>', ], ], 'StreamRecord' => [ 'base' => '<p>A description of a single data modification that was performed on an item in a DynamoDB table.</p>', 'refs' => [ 'Record$dynamodb' => '<p>The main body of the stream record, containing all of the DynamoDB-specific fields.</p>', ], ], 'StreamStatus' => [ 'refs' => [ 'StreamDescription$StreamStatus' => '<p>Indicates the current status of the stream:</p> <ul> <li><p><code>ENABLING</code> - Streams is currently being enabled on the DynamoDB table.</p></li> <li><p><code>ENABLING</code> - the stream is enabled.</p></li> <li><p><code>DISABLING</code> - Streams is currently being disabled on the DynamoDB table.</p></li> <li><p><code>DISABLED</code> - the stream is disabled.</p></li> </ul>', ], ], 'StreamViewType' => [ 'refs' => [ 'StreamDescription$StreamViewType' => '<p>Indicates the format of the records within this stream:</p> <ul> <li><p><code>KEYS_ONLY</code> - only the key attributes of items that were modified in the DynamoDB table.</p></li> <li><p><code>NEW_IMAGE</code> - entire item from the table, as it appeared after they were modified.</p></li> <li><p><code>OLD_IMAGE</code> - entire item from the table, as it appeared before they were modified.</p></li> <li><p><code>NEW_AND_OLD_IMAGES</code> - both the new and the old images of the items from the table.</p></li> </ul>', 'StreamRecord$StreamViewType' => '<p>The type of data from the modified DynamoDB item that was captured in this stream record:</p> <ul> <li><p><code>KEYS_ONLY</code> - only the key attributes of the modified item.</p></li> <li><p><code>NEW_IMAGE</code> - the entire item, as it appears after it was modified.</p></li> <li><p><code>OLD_IMAGE</code> - the entire item, as it appeared before it was modified.</p></li> <li><p><code>NEW_AND_OLD_IMAGES</code> — both the new and the old item images of the item.</p></li> </ul>', ], ], 'String' => [ 'refs' => [ 'Record$awsRegion' => '<p>The region in which the <i>GetRecords</i> request was received.</p>', 'Record$eventID' => '<p>A globally unique identifier for the event that was recorded in this stream record.</p>', 'Record$eventSource' => '<p>The AWS service from which the stream record originated. For DynamoDB Streams, this is <i>aws:dynamodb</i>.</p>', 'Record$eventVersion' => '<p>The version number of the stream record format. Currently, this is <i>1.0</i>.</p>', 'Stream$StreamLabel' => '<p>A timestamp, in ISO 8601 format, for this stream.</p> <p>Note that <i>LatestStreamLabel</i> is not a unique identifier for the stream, because it is possible that a stream from another table might have the same timestamp. However, the combination of the following three elements is guaranteed to be unique:</p> <ul> <li><p>the AWS customer ID.</p></li> <li><p>the table name</p></li> <li><p>the <i>StreamLabel</i></p></li> </ul>', 'StreamDescription$StreamLabel' => '<p>A timestamp, in ISO 8601 format, for this stream.</p> <p>Note that <i>LatestStreamLabel</i> is not a unique identifier for the stream, because it is possible that a stream from another table might have the same timestamp. However, the combination of the following three elements is guaranteed to be unique:</p> <ul> <li><p>the AWS customer ID.</p></li> <li><p>the table name</p></li> <li><p>the <i>StreamLabel</i></p></li> </ul>', ], ], 'StringAttributeValue' => [ 'refs' => [ 'AttributeValue$S' => '<p>A String data type.</p>', ], ], 'StringSetAttributeValue' => [ 'refs' => [ 'AttributeValue$SS' => '<p>A String Set data type.</p>', ], ], 'TableName' => [ 'refs' => [ 'ListStreamsInput$TableName' => '<p>If this parameter is provided, then only the streams associated with this table name are returned.</p>', 'Stream$TableName' => '<p>The DynamoDB table with which the stream is associated.</p>', 'StreamDescription$TableName' => '<p>The DynamoDB table with which the stream is associated.</p>', ], ], 'TrimmedDataAccessException' => [ 'base' => '<p>The operation attempted to read past the oldest stream record in a shard.</p> <p>In DynamoDB Streams, there is a 24 hour limit on data retention. Stream records whose age exceeds this limit are subject to removal (trimming] from the stream. You might receive a TrimmedDataAccessException if:</p> <ul> <li>You request a shard iterator with a sequence number older than the trim point (24 hours].</li> <li>You obtain a shard iterator, but before you use the iterator in a <i>GetRecords</i> request, a stream record in the shard exceeds the 24 hour period and is trimmed. This causes the iterator to access a record that no longer exists.</li> </ul>', 'refs' => [], ], ], 'service' => '<fullname>Amazon DynamoDB Streams</fullname> <p>This is the Amazon DynamoDB Streams API Reference. This guide describes the low-level API actions for accessing streams and processing stream records. For information about application development with DynamoDB Streams, see the <a href="http://docs.aws.amazon.com/amazondynamodb/latest/developerguide//Streams.html">Amazon DynamoDB Developer Guide</a>.</p> <p>Note that this document is intended for use with the following DynamoDB documentation:</p> <ul> <li> <p> <a href="http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/">Amazon DynamoDB Developer Guide</a> </p> </li> <li> <p> <a href="http://docs.aws.amazon.com/amazondynamodb/latest/APIReference/">Amazon DynamoDB API Reference</a> </p> </li> </ul> <p>The following are short descriptions of each low-level DynamoDB Streams API action, organized by function.</p> <ul> <li><p><i>DescribeStream</i> - Returns detailed information about a particular stream.</p></li> <li> <p><i>GetRecords</i> - Retrieves the stream records from within a shard.</p> </li> <li> <p><i>GetShardIterator</i> - Returns information on how to retrieve the streams record from a shard with a given shard ID.</p> </li> <li> <p><i>ListStreams</i> - Returns a list of all the streams associated with the current AWS account and endpoint.</p> </li> </ul>',];