<?php
// This file was auto-generated from sdk-root/src/data/lambda/2015-03-31/docs-2.json
return [ 'version' => '2.0', 'operations' => [ 'AddPermission' => '<p>Adds a permission to the access policy associated with the specified AWS Lambda function. In a "push event" model, the access policy attached to the Lambda function grants Amazon S3 or a user application permission for the Lambda <code>lambda:Invoke</code> action. For information about the push model, see <a href="http://docs.aws.amazon.com/lambda/latest/dg/lambda-introduction.html">AWS Lambda: How it Works</a>. Each Lambda function has one access policy associated with it. You can use the <code>AddPermission</code> API to add a permission to the policy. You have one access policy but it can have multiple permission statements.</p> <p>This operation requires permission for the <code>lambda:AddPermission</code> action.</p>', 'CreateEventSourceMapping' => '<p>Identifies a stream as an event source for a Lambda function. It can be either an Amazon Kinesis stream or an Amazon DynamoDB stream. AWS Lambda invokes the specified function when records are posted to the stream.</p> <p>This is the pull model, where AWS Lambda invokes the function. For more information, go to <a href="http://docs.aws.amazon.com/lambda/latest/dg/lambda-introduction.html">AWS Lambda: How it Works</a> in the <i>AWS Lambda Developer Guide</i>.</p> <p>This association between an Amazon Kinesis stream and a Lambda function is called the event source mapping. You provide the configuration information (for example, which stream to read from and which Lambda function to invoke] for the event source mapping in the request body.</p> <p> Each event source, such as an Amazon Kinesis or a DynamoDB stream, can be associated with multiple AWS Lambda function. A given Lambda function can be associated with multiple AWS event sources. </p> <p>This operation requires permission for the <code>lambda:CreateEventSourceMapping</code> action.</p>', 'CreateFunction' => '<p>Creates a new Lambda function. The function metadata is created from the request parameters, and the code for the function is provided by a .zip file in the request body. If the function name already exists, the operation will fail. Note that the function name is case-sensitive. </p> <p>This operation requires permission for the <code>lambda:CreateFunction</code> action.</p>', 'DeleteEventSourceMapping' => '<p>Removes an event source mapping. This means AWS Lambda will no longer invoke the function for events in the associated source.</p> <p>This operation requires permission for the <code>lambda:DeleteEventSourceMapping</code> action.</p>', 'DeleteFunction' => '<p>Deletes the specified Lambda function code and configuration.</p> <p>When you delete a function the associated access policy is also deleted. You will need to delete the event source mappings explicitly.</p> <p>This operation requires permission for the <code>lambda:DeleteFunction</code> action.</p>', 'GetEventSourceMapping' => '<p>Returns configuration information for the specified event source mapping (see <a>CreateEventSourceMapping</a>].</p> <p>This operation requires permission for the <code>lambda:GetEventSourceMapping</code> action.</p>', 'GetFunction' => '<p>Returns the configuration information of the Lambda function and a presigned URL link to the .zip file you uploaded with <a>CreateFunction</a> so you can download the .zip file. Note that the URL is valid for up to 10 minutes. The configuration information is the same information you provided as parameters when uploading the function.</p> <p>This operation requires permission for the <code>lambda:GetFunction</code> action.</p>', 'GetFunctionConfiguration' => '<p>Returns the configuration information of the Lambda function. This the same information you provided as parameters when uploading the function by using <a>CreateFunction</a>.</p> <p>This operation requires permission for the <code>lambda:GetFunctionConfiguration</code> operation.</p>', 'GetPolicy' => '<p>Returns the access policy, containing a list of permissions granted via the <code>AddPermission</code> API, associated with the specified bucket.</p> <p>You need permission for the <code>lambda:GetPolicy action.</code></p>', 'Invoke' => '<p> Invokes a specified Lambda function. </p> <p>This operation requires permission for the <code>lambda:InvokeFunction</code> action.</p>', 'InvokeAsync' => '<important>This API is deprecated. We recommend you use <code>Invoke</code> API (see <a>Invoke</a>].</important> <p>Submits an invocation request to AWS Lambda. Upon receiving the request, Lambda executes the specified function asynchronously. To see the logs generated by the Lambda function execution, see the CloudWatch logs console.</p> <p>This operation requires permission for the <code>lambda:InvokeFunction</code> action.</p>', 'ListEventSourceMappings' => '<p>Returns a list of event source mappings you created using the <code>CreateEventSourceMapping</code> (see <a>CreateEventSourceMapping</a>], where you identify a stream as an event source. This list does not include Amazon S3 event sources. </p> <p>For each mapping, the API returns configuration information. You can optionally specify filters to retrieve specific event source mappings.</p> <p>This operation requires permission for the <code>lambda:ListEventSourceMappings</code> action.</p>', 'ListFunctions' => '<p>Returns a list of your Lambda functions. For each function, the response includes the function configuration information. You must use <a>GetFunction</a> to retrieve the code for your function.</p> <p>This operation requires permission for the <code>lambda:ListFunctions</code> action.</p>', 'RemovePermission' => '<p>You can remove individual permissions from an access policy associated with a Lambda function by providing a Statement ID. </p> <p>Note that removal of a permission will cause an active event source to lose permission to the function. </p> <p>You need permission for the <code>lambda:RemovePermission</code> action.</p>', 'UpdateEventSourceMapping' => '<p>You can update an event source mapping. This is useful if you want to change the parameters of the existing mapping without losing your position in the stream. You can change which function will receive the stream records, but to change the stream itself, you must create a new mapping. </p> <p>This operation requires permission for the <code>lambda:UpdateEventSourceMapping</code> action.</p>', 'UpdateFunctionCode' => '<p> Updates the code for the specified Lambda function. This operation must only be used on an existing Lambda function and cannot be used to update the function configuration. </p> <p>This operation requires permission for the <code>lambda:UpdateFunctionCode</code> action.</p>', 'UpdateFunctionConfiguration' => '<p>Updates the configuration parameters for the specified Lambda function by using the values provided in the request. You provide only the parameters you want to change. This operation must only be used on an existing Lambda function and cannot be used to update the function\'s code. </p> <p>This operation requires permission for the <code>lambda:UpdateFunctionConfiguration</code> action.</p>', ], 'service' => '<fullname>AWS Lambda</fullname> <p><b>Overview</b></p> <p>This is the <i>AWS Lambda API Reference</i>. The AWS Lambda Developer Guide provides additional information. For the service overview, go to <a href="http://docs.aws.amazon.com/lambda/latest/dg/welcome.html">What is AWS Lambda</a>, and for information about how the service works, go to <a href="http://docs.aws.amazon.com/lambda/latest/dg/lambda-introduction.html">AWS Lambda: How it Works</a> in the <i>AWS Lambda Developer Guide</i>.</p>', 'shapes' => [ 'Action' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$Action' => '<p>The AWS Lambda action you want to allow in this statement. Each Lambda action is a string starting with "lambda:" followed by the API name (see <a>Operations</a>]. For example, "lambda:CreateFunction". You can use wildcard ("lambda:*"] to grant permission for all AWS Lambda actions. </p>', ], ], 'AddPermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'AddPermissionResponse' => [ 'base' => NULL, 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$SourceArn' => '<p>This is optional; however, when granting Amazon S3 permission to invoke your function, you should specify this field with the bucket Amazon Resource Name (ARN] as its value. This ensures that only events generated from the specified bucket can invoke the function. </p> <important>If you add a permission for the Amazon S3 principal without providing the source ARN, any AWS account that creates a mapping to your function ARN can send events to invoke your Lambda function from Amazon S3.</important>', 'CreateEventSourceMappingRequest$EventSourceArn' => '<p>The Amazon Resource Name (ARN] of the Amazon Kinesis or the Amazon DynamoDB stream that is the event source. Any record added to this stream could cause AWS Lambda to invoke your Lambda function, it depends on the <code>BatchSize</code>. AWS Lambda POSTs the Amazon Kinesis event, containing records, to your Lambda function as JSON.</p>', 'EventSourceMappingConfiguration$EventSourceArn' => '<p>The Amazon Resource Name (ARN] of the Amazon Kinesis stream that is the source of events.</p>', 'ListEventSourceMappingsRequest$EventSourceArn' => '<p>The Amazon Resource Name (ARN] of the Amazon Kinesis stream.</p>', ], ], 'BatchSize' => [ 'base' => NULL, 'refs' => [ 'CreateEventSourceMappingRequest$BatchSize' => '<p>The largest number of records that AWS Lambda will retrieve from your event source at the time of invoking your function. Your function receives an event with all the retrieved records. The default is 100 records.</p>', 'EventSourceMappingConfiguration$BatchSize' => '<p>The largest number of records that AWS Lambda will retrieve from your event source at the time of invoking your function. Your function receives an event with all the retrieved records.</p>', 'UpdateEventSourceMappingRequest$BatchSize' => '<p>The maximum number of stream records that can be sent to your Lambda function for a single invocation.</p>', ], ], 'Blob' => [ 'base' => NULL, 'refs' => [ 'FunctionCode$ZipFile' => '<p>A base64-encoded .zip file containing your deployment package. For more information about creating a .zip file, go to <a href="http://docs.aws.amazon.com/lambda/latest/dg/intro-permission-model.html#lambda-intro-execution-role.html">Execution Permissions</a> in the <i>AWS Lambda Developer Guide</i>. </p>', 'InvocationRequest$Payload' => '<p>JSON that you want to provide to your Lambda function as input.</p>', 'InvocationResponse$Payload' => '<p> It is the JSON representation of the object returned by the Lambda function. In This is present only if the invocation type is "RequestResponse". </p> <p>In the event of a function error this field contains a message describing the error. For the <code>Handled</code> errors the Lambda function will report this message. For <code>Unhandled</code> errors AWS Lambda reports the message. </p>', 'UpdateFunctionCodeRequest$ZipFile' => '<p>Based64-encoded .zip file containing your packaged source code.</p>', ], ], 'BlobStream' => [ 'base' => NULL, 'refs' => [ 'InvokeAsyncRequest$InvokeArgs' => '<p>JSON that you want to provide to your Lambda function as input.</p>', ], ], 'CodeStorageExceededException' => [ 'base' => NULL, 'refs' => [], ], 'CreateEventSourceMappingRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateFunctionRequest' => [ 'base' => NULL, 'refs' => [], ], 'Date' => [ 'base' => NULL, 'refs' => [ 'EventSourceMappingConfiguration$LastModified' => '<p>The UTC time string indicating the last time the event mapping was updated.</p>', ], ], 'DeleteEventSourceMappingRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteFunctionRequest' => [ 'base' => NULL, 'refs' => [], ], 'Description' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$Description' => '<p>A short, user-defined function description. Lambda does not use this value. Assign a meaningful description as you see fit.</p>', 'FunctionConfiguration$Description' => '<p>The user-provided description.</p>', 'UpdateFunctionConfigurationRequest$Description' => '<p>A short user-defined function description. AWS Lambda does not use this value. Assign a meaningful description as you see fit.</p>', ], ], 'Enabled' => [ 'base' => NULL, 'refs' => [ 'CreateEventSourceMappingRequest$Enabled' => '<p>Indicates whether AWS Lambda should begin polling the event source, the default is not enabled. </p>', 'UpdateEventSourceMappingRequest$Enabled' => '<p>Specifies whether AWS Lambda should actively poll the stream or not. If disabled, AWS Lambda will not poll the stream.</p>', ], ], 'EventSourceMappingConfiguration' => [ 'base' => '<p>Describes mapping between an Amazon Kinesis stream and a Lambda function.</p>', 'refs' => [ 'EventSourceMappingsList$member' => NULL, ], ], 'EventSourceMappingsList' => [ 'base' => NULL, 'refs' => [ 'ListEventSourceMappingsResponse$EventSourceMappings' => '<p>An array of <code>EventSourceMappingConfiguration</code> objects.</p>', ], ], 'EventSourcePosition' => [ 'base' => NULL, 'refs' => [ 'CreateEventSourceMappingRequest$StartingPosition' => '<p>The position in the stream where AWS Lambda should start reading. For more information, go to <a href="http://docs.aws.amazon.com/kinesis/latest/APIReference/API_GetShardIterator.html#Kinesis-GetShardIterator-request-ShardIteratorType">ShardIteratorType</a> in the <i>Amazon Kinesis API Reference</i>. </p>', ], ], 'FunctionArn' => [ 'base' => NULL, 'refs' => [ 'EventSourceMappingConfiguration$FunctionArn' => '<p>The Lambda function to invoke when AWS Lambda detects an event on the stream.</p>', 'FunctionConfiguration$FunctionArn' => '<p>The Amazon Resource Name (ARN] assigned to the function.</p>', ], ], 'FunctionCode' => [ 'base' => '<p>The code for the Lambda function.</p>', 'refs' => [ 'CreateFunctionRequest$Code' => '<p>The code for the Lambda function. </p>', ], ], 'FunctionCodeLocation' => [ 'base' => '<p>The object for the Lambda function location.</p>', 'refs' => [ 'GetFunctionResponse$Code' => NULL, ], ], 'FunctionConfiguration' => [ 'base' => '<p>A complex type that describes function metadata.</p>', 'refs' => [ 'FunctionList$member' => NULL, 'GetFunctionResponse$Configuration' => NULL, ], ], 'FunctionList' => [ 'base' => NULL, 'refs' => [ 'ListFunctionsResponse$Functions' => '<p>A list of Lambda functions.</p>', ], ], 'FunctionName' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$FunctionName' => '<p>Name of the Lambda function whose access policy you are updating by adding a new permission.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'CreateEventSourceMappingRequest$FunctionName' => '<p>The Lambda function to invoke when AWS Lambda detects an event on the stream.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'CreateFunctionRequest$FunctionName' => '<p>The name you want to assign to the function you are uploading. You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. The function names appear in the console and are returned in the <a>ListFunctions</a> API. Function names are used to specify functions to other AWS Lambda APIs, such as <a>Invoke</a>. </p>', 'DeleteFunctionRequest$FunctionName' => '<p>The Lambda function to delete.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'FunctionConfiguration$FunctionName' => '<p>The name of the function.</p>', 'GetFunctionConfigurationRequest$FunctionName' => '<p>The name of the Lambda function for which you want to retrieve the configuration information.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'GetFunctionRequest$FunctionName' => '<p>The Lambda function name. </p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'GetPolicyRequest$FunctionName' => '<p>Function name whose access policy you want to retrieve. </p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'InvocationRequest$FunctionName' => '<p>The Lambda function name. </p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'InvokeAsyncRequest$FunctionName' => '<p>The Lambda function name.</p>', 'ListEventSourceMappingsRequest$FunctionName' => '<p>The name of the Lambda function.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'RemovePermissionRequest$FunctionName' => '<p>Lambda function whose access policy you want to remove a permission from.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'UpdateEventSourceMappingRequest$FunctionName' => '<p>The Lambda function to which you want the stream records sent.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'UpdateFunctionCodeRequest$FunctionName' => '<p>The existing Lambda function name whose code you want to replace.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', 'UpdateFunctionConfigurationRequest$FunctionName' => '<p>The name of the Lambda function.</p> <p> You can specify an unqualified function name (for example, "Thumbnail"] or you can specify Amazon Resource Name (ARN] of the function (for example, "arn:aws:lambda:us-west-2:account-id:function:ThumbNail"]. AWS Lambda also allows you to specify only the account ID qualifier (for example, "account-id:Thumbnail"]. Note that the length constraint applies only to the ARN. If you specify only the function name, it is limited to 64 character in length. </p>', ], ], 'GetEventSourceMappingRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetFunctionConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetFunctionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetFunctionResponse' => [ 'base' => '<p>This response contains the object for the Lambda function location (see <a>API_FunctionCodeLocation</a></p>', 'refs' => [], ], 'GetPolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetPolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'Handler' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$Handler' => '<p>The function within your code that Lambda calls to begin execution. For Node.js, it is the <i>module-name</i>.<i>export</i> value in your function. For Java, it can be <code>package.class-name::handler</code> or <code>package.class-name</code>. For more information, see <a href="http://docs.aws.amazon.com/lambda/latest/dg/java-programming-model-handler-types.html">Lambda Function Handler (Java]</a>. </p>', 'FunctionConfiguration$Handler' => '<p>The function Lambda calls to begin executing your function.</p>', 'UpdateFunctionConfigurationRequest$Handler' => '<p>The function that Lambda calls to begin executing your function. For Node.js, it is the <i>module-name.export</i> value in your function. </p>', ], ], 'HttpStatus' => [ 'base' => NULL, 'refs' => [ 'InvokeAsyncResponse$Status' => '<p>It will be 202 upon success.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'InvocationResponse$StatusCode' => '<p>The HTTP status code will be in the 200 range for successful request. For the "RequestResonse" invocation type this status code will be 200. For the "Event" invocation type this status code will be 202. For the "DryRun" invocation type the status code will be 204. </p>', ], ], 'InvalidParameterValueException' => [ 'base' => '<p>One of the parameters in the request is invalid. For example, if you provided an IAM role for AWS Lambda to assume in the <code>CreateFunction</code> or the <code>UpdateFunctionConfiguration</code> API, that AWS Lambda is unable to assume you will get this exception. </p>', 'refs' => [], ], 'InvalidRequestContentException' => [ 'base' => '<p>The request body could not be parsed as JSON.</p>', 'refs' => [], ], 'InvocationRequest' => [ 'base' => NULL, 'refs' => [], ], 'InvocationResponse' => [ 'base' => '<p>Upon success, returns an empty response. Otherwise, throws an exception.</p>', 'refs' => [], ], 'InvocationType' => [ 'base' => NULL, 'refs' => [ 'InvocationRequest$InvocationType' => '<p>By default, the <code>Invoke</code> API assumes "RequestResponse" invocation type. You can optionally request asynchronous execution by specifying "Event" as the <code>InvocationType</code>. You can also use this parameter to request AWS Lambda to not execute the function but do some verification, such as if the caller is authorized to invoke the function and if the inputs are valid. You request this by specifying "DryRun" as the <code>InvocationType</code>. This is useful in a cross-account scenario when you want to verify access to a function without running it. </p>', ], ], 'InvokeAsyncRequest' => [ 'base' => NULL, 'refs' => [], ], 'InvokeAsyncResponse' => [ 'base' => '<p>Upon success, it returns empty response. Otherwise, throws an exception.</p>', 'refs' => [], ], 'ListEventSourceMappingsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEventSourceMappingsResponse' => [ 'base' => '<p>Contains a list of event sources (see <a>API_EventSourceMappingConfiguration</a>]</p>', 'refs' => [], ], 'ListFunctionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListFunctionsResponse' => [ 'base' => '<p>Contains a list of AWS Lambda function configurations (see <a>FunctionConfiguration</a>.</p>', 'refs' => [], ], 'LogType' => [ 'base' => NULL, 'refs' => [ 'InvocationRequest$LogType' => '<p>You can set this optional parameter to "Tail" in the request only if you specify the <code>InvocationType</code> parameter with value "RequestResponse". In this case, AWS Lambda returns the base64-encoded last 4 KB of log data produced by your Lambda function in the <code>x-amz-log-results</code> header. </p>', ], ], 'Long' => [ 'base' => NULL, 'refs' => [ 'FunctionConfiguration$CodeSize' => '<p>The size, in bytes, of the function .zip file you uploaded.</p>', ], ], 'MaxListItems' => [ 'base' => NULL, 'refs' => [ 'ListEventSourceMappingsRequest$MaxItems' => '<p>Optional integer. Specifies the maximum number of event sources to return in response. This value must be greater than 0.</p>', 'ListFunctionsRequest$MaxItems' => '<p>Optional integer. Specifies the maximum number of AWS Lambda functions to return in response. This parameter value must be greater than 0.</p>', ], ], 'MemorySize' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$MemorySize' => '<p>The amount of memory, in MB, your Lambda function is given. Lambda uses this memory size to infer the amount of CPU and memory allocated to your function. Your function use-case determines your CPU and memory requirements. For example, a database operation might need less memory compared to an image processing function. The default value is 128 MB. The value must be a multiple of 64 MB.</p>', 'FunctionConfiguration$MemorySize' => '<p>The memory size, in MB, you configured for the function. Must be a multiple of 64 MB.</p>', 'UpdateFunctionConfigurationRequest$MemorySize' => '<p>The amount of memory, in MB, your Lambda function is given. AWS Lambda uses this memory size to infer the amount of CPU allocated to your function. Your function use-case determines your CPU and memory requirements. For example, a database operation might need less memory compared to an image processing function. The default value is 128 MB. The value must be a multiple of 64 MB.</p>', ], ], 'PolicyLengthExceededException' => [ 'base' => '<p>Lambda function access policy is limited to 20 KB.</p>', 'refs' => [], ], 'Principal' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$Principal' => '<p>The principal who is getting this permission. It can be Amazon S3 service Principal ("s3.amazonaws.com"] if you want Amazon S3 to invoke the function, an AWS account ID if you are granting cross-account permission, or any valid AWS service principal such as "sns.amazonaws.com". For example, you might want to allow a custom application in another AWS account to push events to AWS Lambda by invoking your function. </p>', ], ], 'RemovePermissionRequest' => [ 'base' => NULL, 'refs' => [], ], 'RequestTooLargeException' => [ 'base' => NULL, 'refs' => [], ], 'ResourceConflictException' => [ 'base' => '<p>The resource already exists.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The resource (for example, a Lambda function or access policy statement] specified in the request does not exist.</p>', 'refs' => [], ], 'RoleArn' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$Role' => '<p>The Amazon Resource Name (ARN] of the IAM role that Lambda assumes when it executes your function to access any other Amazon Web Services (AWS] resources. For more information, see <a href="http://docs.aws.amazon.com/lambda/latest/dg/lambda-introduction.html">AWS Lambda: How it Works</a> </p>', 'FunctionConfiguration$Role' => '<p>The Amazon Resource Name (ARN] of the IAM role that Lambda assumes when it executes your function to access any other Amazon Web Services (AWS] resources. </p>', 'UpdateFunctionConfigurationRequest$Role' => '<p>The Amazon Resource Name (ARN] of the IAM role that Lambda will assume when it executes your function. </p>', ], ], 'Runtime' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$Runtime' => '<p>The runtime environment for the Lambda function you are uploading. Currently, Lambda supports "java" and "nodejs" as the runtime.</p>', 'FunctionConfiguration$Runtime' => '<p>The runtime environment for the Lambda function.</p>', ], ], 'S3Bucket' => [ 'base' => NULL, 'refs' => [ 'FunctionCode$S3Bucket' => '<p>Amazon S3 bucket name where the .zip file containing your deployment package is stored. This bucket must reside in the same AWS region where you are creating the Lambda function. </p>', 'UpdateFunctionCodeRequest$S3Bucket' => '<p>Amazon S3 bucket name where the .zip file containing your deployment package is stored. This bucket must reside in the same AWS region where you are creating the Lambda function.</p>', ], ], 'S3Key' => [ 'base' => NULL, 'refs' => [ 'FunctionCode$S3Key' => '<p>The Amazon S3 object (the deployment package] key name you want to upload. </p>', 'UpdateFunctionCodeRequest$S3Key' => '<p>The Amazon S3 object (the deployment package] key name you want to upload. </p>', ], ], 'S3ObjectVersion' => [ 'base' => NULL, 'refs' => [ 'FunctionCode$S3ObjectVersion' => '<p>The Amazon S3 object (the deployment package] version you want to upload.</p>', 'UpdateFunctionCodeRequest$S3ObjectVersion' => '<p>The Amazon S3 object (the deployment package] version you want to upload.</p>', ], ], 'ServiceException' => [ 'base' => '<p>The AWS Lambda service encountered an internal error.</p>', 'refs' => [], ], 'SourceOwner' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$SourceAccount' => '<p>The AWS account ID (without a hyphen] of the source owner. For example, if the <code>SourceArn</code> identifies a bucket, then this is the bucket owner\'s account ID. You can use this additional condition to ensure the bucket you specify is owned by a specific account (it is possible the bucket owner deleted the bucket and some other AWS account created the bucket]. You can also use this condition to specify all sources (that is, you don\'t specify the <code>SourceArn</code>] owned by a specific account. </p>', ], ], 'StatementId' => [ 'base' => NULL, 'refs' => [ 'AddPermissionRequest$StatementId' => '<p>A unique statement identifier.</p>', 'RemovePermissionRequest$StatementId' => '<p>Statement ID of the permission to remove.</p>', ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AddPermissionResponse$Statement' => '<p>The permission statement you specified in the request. The response returns the same as a string using "\\" as an escape character in the JSON. </p>', 'CodeStorageExceededException$Type' => NULL, 'CodeStorageExceededException$message' => NULL, 'DeleteEventSourceMappingRequest$UUID' => '<p>The event source mapping ID.</p>', 'EventSourceMappingConfiguration$UUID' => '<p>The AWS Lambda assigned opaque identifier for the mapping.</p>', 'EventSourceMappingConfiguration$LastProcessingResult' => '<p>The result of the last AWS Lambda invocation of your Lambda function.</p>', 'EventSourceMappingConfiguration$State' => '<p>The state of the event source mapping. It can be "Creating", "Enabled", "Disabled", "Enabling", "Disabling", "Updating", or "Deleting".</p>', 'EventSourceMappingConfiguration$StateTransitionReason' => '<p>The reason the event source mapping is in its current state. It is either user-requested or an AWS Lambda-initiated state transition.</p>', 'FunctionCodeLocation$RepositoryType' => '<p>The repository from which you can download the function.</p>', 'FunctionCodeLocation$Location' => '<p>The presigned URL you can use to download the function\'s .zip file that you previously uploaded. The URL is valid for up to 10 minutes.</p>', 'GetEventSourceMappingRequest$UUID' => '<p>The AWS Lambda assigned ID of the event source mapping.</p>', 'GetPolicyResponse$Policy' => '<p>The access policy associated with the specified function. The response returns the same as a string using "\\" as an escape character in the JSON. </p>', 'InvalidParameterValueException$Type' => NULL, 'InvalidParameterValueException$message' => NULL, 'InvalidRequestContentException$Type' => NULL, 'InvalidRequestContentException$message' => NULL, 'InvocationRequest$ClientContext' => '<p>Using the <code>ClientContext</code> you can pass client-specific information to the Lambda function you are invoking. You can then process the client information in your Lambda function as you choose through the context variable. For an example of a ClientContext JSON, go to <a href="http://docs.aws.amazon.com/mobileanalytics/latest/ug/PutEvents.html">PutEvents</a> in the <i>Amazon Mobile Analytics API Reference and User Guide</i>.</p> <p>The ClientContext JSON must be base64-encoded.</p>', 'InvocationResponse$FunctionError' => '<p>Indicates whether an error occurred while executing the Lambda function. If an error occurred this field will have one of two values; <code>Handled</code> or <code>Unhandled</code>. <code>Handled</code> errors are errors that are reported by the function while the <code>Unhandled</code> errors are those detected and reported by AWS Lambda. Unhandled errors include out of memory errors and function timeouts. For information about how to report an <code>Handled</code> error, see <a href="http://docs.aws.amazon.com/lambda/latest/dg/programming-model.html">Programming Model</a>. </p>', 'InvocationResponse$LogResult' => '<p> It is the base64-encoded logs for the Lambda function invocation. This is present only if the invocation type is "RequestResponse" and the logs were requested. </p>', 'ListEventSourceMappingsRequest$Marker' => '<p>Optional string. An opaque pagination token returned from a previous <code>ListEventSourceMappings</code> operation. If present, specifies to continue the list from where the returning call left off. </p>', 'ListEventSourceMappingsResponse$NextMarker' => '<p>A string, present if there are more event source mappings.</p>', 'ListFunctionsRequest$Marker' => '<p>Optional string. An opaque pagination token returned from a previous <code>ListFunctions</code> operation. If present, indicates where to continue the listing. </p>', 'ListFunctionsResponse$NextMarker' => '<p>A string, present if there are more functions.</p>', 'PolicyLengthExceededException$Type' => NULL, 'PolicyLengthExceededException$message' => NULL, 'RequestTooLargeException$Type' => NULL, 'RequestTooLargeException$message' => NULL, 'ResourceConflictException$Type' => NULL, 'ResourceConflictException$message' => NULL, 'ResourceNotFoundException$Type' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ServiceException$Type' => NULL, 'ServiceException$Message' => NULL, 'TooManyRequestsException$retryAfterSeconds' => '<p>The number of seconds the caller should wait before retrying.</p>', 'TooManyRequestsException$Type' => NULL, 'TooManyRequestsException$message' => NULL, 'UnsupportedMediaTypeException$Type' => NULL, 'UnsupportedMediaTypeException$message' => NULL, 'UpdateEventSourceMappingRequest$UUID' => '<p>The event source mapping identifier.</p>', ], ], 'Timeout' => [ 'base' => NULL, 'refs' => [ 'CreateFunctionRequest$Timeout' => '<p>The function execution time at which Lambda should terminate the function. Because the execution time has cost implications, we recommend you set this value based on your expected execution time. The default is 3 seconds. </p>', 'FunctionConfiguration$Timeout' => '<p>The function execution time at which Lambda should terminate the function. Because the execution time has cost implications, we recommend you set this value based on your expected execution time. The default is 3 seconds. </p>', 'UpdateFunctionConfigurationRequest$Timeout' => '<p>The function execution time at which AWS Lambda should terminate the function. Because the execution time has cost implications, we recommend you set this value based on your expected execution time. The default is 3 seconds. </p>', ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'FunctionConfiguration$LastModified' => '<p>The timestamp of the last time you updated the function.</p>', ], ], 'TooManyRequestsException' => [ 'base' => NULL, 'refs' => [], ], 'UnsupportedMediaTypeException' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEventSourceMappingRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateFunctionCodeRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateFunctionConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], ],];