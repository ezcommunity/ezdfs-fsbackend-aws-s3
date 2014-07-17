# Support for Amazon S3 as a DFS backend

## Summary

An AmazonS3 DFS FS handler is added to the existing local filesystem one.

The previous `eZDFSFileHandlerDFSBackend`, in charge of reading/writing files to NFS, is in DFS replaced by a dispatcher.
This dispatcher receives a stack of DFSBackend handlers. Each handler will respond true/false when asked if it supports
a file path.

An amazonS3 handler is provided, that can be configured to store images.

## Installation

### Requirements
- ezsystems/ezdfs-fsbackend-dispatcher must installed
- an amazon web services account

### Installation using composer
From the eZ Publish Community/Platform root, run
```
$ composer require ezsystems/ezdfs-fsbackend-aws-s3:~1.0@beta
```

## Configuration

The handler must first be configured in an `dfsamazons3.ini` override:
```ini
[BackendSettings]
AccessKeyID=
SecretAccessKey=
Bucket=
Region=
```

It must then be be set as an additional handler matching one or several path in a `dispatchabledfs.ini` override:

```ini
[DispatchableDFS]
PathBackends[var/ezdemo_site/storage/images]=eZDFSFileHandlerDFSAmazon
```
