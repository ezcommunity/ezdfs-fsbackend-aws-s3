# Support for Amazon S3 as a DFS backend

## Summary

An AmazonS3 DFS FS handler is added to the existing local filesystem one.

The previous `eZDFSFileHandlerDFSBackend`, in charge of reading/writing files to NFS, is in DFS replaced by a dispatcher.
This dispatcher receives a stack of DFSBackend handlers. Each handler will respond true/false when asked if it supports
a file path.

An amazonS3 handler is provided, that can be configured to store images.

## Configuration

The default configuration can be seen in file.ini, and can be modified in an override.

A typical configuration would look like this:

```ini
[eZDFSClusteringSettings]
# Usual DFS configuration

DFSBackends[]
DFSBackends[]=amazonS3
DFSBackends[]=dfs

[DFSBackend_amazonS3]
Class=eZDFSFileHandlerDFSAmazon
FactoryMethod=factory
AccessKeyID=MyAccessKey
SecretAccessKey=MySecretKey
Bucket=bucket.name
Region=eu-west-1
Prefix=var/ezdemo_site/storage/images
